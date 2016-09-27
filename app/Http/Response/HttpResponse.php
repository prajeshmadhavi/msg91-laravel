<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 26/04/16
 * Time: 12:20 PM
 */

namespace App\Http\Response;



use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Response;

class HttpResponse
{

    protected $statusCode = 200;

    /**
     *
     * Enforces Authorization Check on all API calls except Overridden
     */
    public function __construct()
    {

    }

    /**
     * When a missing resource is requested
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = "Invalid Resource ID,  Not Found !")
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     * respond with a generic error
     * @param string $message
     * @return mixed
     */
    public function respondWithError($message = 'There was an error')
    {
        return $this->respond($message);
    }

    /**
     * Give json feedback with status code
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        $data = is_array($data) ? $data : ['message' => $data];
        return Response::json($data, $this->getStatusCode(), $headers);
    }


    /**
     * @param $request
     * @param null $data
     * @return \Illuminate\Http\RedirectResponse
     */

    public function responds($request, $data = null)
    {
        return $request->ajax() || $request->wantsJson() ?   response()->json($data)    : redirect()->back();
    }



    /**
     * The response status code
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * When a non supported search parameter is requested
     * @param string $message
     * @return mixed
     */
    public function respondWrongParameter($message = "You requested a non supported search parameter!")
    {
        return $this->setStatusCode(400)->respondWithError($message);
    }

    /**
     * There was an internal error
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = "Internal Server Error !!")
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    /**
     * Validation Response
     * @param string $message
     * @return mixed
     */
    public function respondUnprocessableEntity($message = "")
    {
        return Response::json(['errors' => [$message],
            'status_code' => 422], 422);
    }

    /**
     * Returns Unauthorized response
     * @param string $message
     * @return mixed
     */
    public function respondWithUnAuthorized($message = "Not authorized to use this resource!")
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    /**
     * Some operation (save only?) has completed successfully
     * @param string $message
     * @return mixed
     */
    public function respondWithSuccess($message = 'Success !!')
    {
        $this->setStatusCode(201);
        return Response::json($message, $this->getStatusCode());
    }

    /**
     * Some operation (save) failed.
     * @param string $message
     * @return mixed
     */
    public function respondNotSaved($message = "Not Saved !")
    {
        return $this->setStatusCode(400)->respondWithError($message);
    }

    /**
     *
     *FractalType Single Response
     */
    public function respondSingleFractal($data, $instance, $statusCode = 200)
    {
        //return Fractal::item($data, $instance)->responseJson($statusCode);
    }

    /**
     *
     *FractalType Collective Response
     */
    public function respondArrayFractal($data, $instance)
    {
        //return Fractal::collection($data, $instance)->responseJson($this->getStatusCode());
    }

    /**
     * Gives the resource collection with pagination
     * @param LengthAwarePaginator $items
     * @param $data
     * @return mixed
     */

    protected function respondWithPagination(LengthAwarePaginator $items, $data)
    {
        $data = array_merge($data, [
            'paginator' => [
                'total_count' => $items->total(),
                'total_pages' => ceil($items->total() / $items->perPage()),
                'current_page' => $items->currentPage(),
                'limit' => $items->perPage()
            ]
        ]);

        return $this->respond($data);
    }



}