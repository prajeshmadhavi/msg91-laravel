<?php

namespace App\Listeners;

use App\Events\TOTPSent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class TOTPSentListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TOTPSent  $event
     * @return void
     */
    public function handle(TOTPSent $event)
    {
        $user = $event->member;
        
         $client = new \GuzzleHttp\Client(['headers' => ['application-Key' => SEND_OTP_KEY]]);

        $res = $client->request('POST', 'https://sendotp.msg91.com/api/generateOTP', 
        ['json' => ['countryCode' => 91, 'mobileNumber' => $user->phone, 'getGeneratedOTP' => true]]);
        
        $data = json_decode((string)$res->getBody());

        if($data->status == "success")
        {
            $otp = $data->response->oneTimePassword;
            $user->update(['totp_status' => 'valid', 'totp' => $otp]);
            
        }


        

        //Log::info($otp);


        // $client = new Client("ACc51380fe58f436d536a887e6df1f7f3b", "af7ce66bc1a33789a1cee718e8839654");

        // $message = $client->messages->create(
        //     $user->phone, //'+919740389555', // Text this number
        //     array(
        //         'from' =>  TWILIO_NUMBER, // From a valid Twilio number
        //         'body' => 'Your OTP Verification code is '. $otp
        //     )
        // );

        //TODO, send TOTP code via SMS

        //TODO, start countdown to invalidate OTP


    }
}
