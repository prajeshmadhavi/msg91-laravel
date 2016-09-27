<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 04/09/16
 * Time: 5:27 PM
 */

namespace App\Http\Controllers\Auth;


use App\Events\TOTPSent;
use App\Http\Controllers\Controller;
use App\Http\Response\HttpResponse;
use App\Repositories\StudentRepository;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OTPAuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Custom HttpResponse Helper
     */
    protected $response;

    protected $studentRepository;

    /**
     * OTPAuthController constructor.
     * @param HttpResponse $response
     * @param StudentRepository $studentRepository
     * Create a new OTP Authentication controller instance.
     */

    public function __construct(HttpResponse $response, StudentRepository $studentRepository)
    {
        $this->response = $response;
        $this->studentRepository = $studentRepository;
        $this->middleware($this->guestMiddleware());
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::guard($this->getGuard())->user());
        }

        return redirect()->intended($this->redirectPath());
    }


    /**
     * Get the failed login response instance.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendFailedOTPResponse(Request $request)
    {
        return $this->response->respondUnprocessableEntity($this->getFailedOTPMessage());
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedOTPMessage()
    {
        return  'Expired or Invalid OTP Code, Request a new OTP';
    }


    /**
     * Get the guard to be used during authentication.
     *
     * @return string|null
     */
    protected function getGuard()
    {
        return 'student';
    }


    public function loginWithOTP(Request $request)
    {
        $phone = $request->get('phone');
        $this->validate($request, ['phone' => 'required|exists:students']);

        $user = $this->studentRepository->getFirst([], ['phone' => $phone]);
        session()->put('otp_request_phone', $phone);
        event(new TOTPSent($user));
        return response()->json(['message' => 'OTP Code sent, You can request a new one in 60 seconds ']);
    }

    public function verifyOTPLogin(Request $request)
    {
        $throttles = $this->isUsingThrottlesLoginsTrait();
        $credentials = $this->getOTPCredentials($request);

        if($this->isOTPExpired($credentials)){
            return $this->sendFailedOTPResponse($request);
        }

        $user = $this->studentRepository->getFirst([], $credentials);

        if ($user) {
            Auth::guard($this->getGuard())->login($user, false);
            $user->update(['totp_status' => 'expired']);
            session(['otp_requested_approved' => 'otp_requested_approved']);
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        return $this->sendFailedOTPResponse($request);
    }

    protected function getOTPCredentials($request)
    {
        $otp_code = $request->get('otp_code');
        return ['phone' => session('otp_request_phone'), 'totp' => $otp_code, 'totp_status'=> 'valid'];
    }

    /**
     * Nullify and Invalidate the OTP for Login
     */
    public function nullifyOTP()
    {
        $user = $this->studentRepository->getFirst([], ['phone' => session('otp_request_phone')]);
        if($user){
            $user->update(['totp_status' => 'expired']);
        }
    }


    /**
     * @param $credentials
     * @return bool
     * Checks if the given OTP Code is Expired
     */
    protected function isOTPExpired($credentials)
    {
        $data = $credentials;
        $data['totp_status'] = 'expired';
        $user = $this->studentRepository->getFirst([], $data);
        if($user){
            return true;
        }
        return false;
    }

}