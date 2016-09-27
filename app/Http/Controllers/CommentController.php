<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Response\HttpResponse;
use App\Repositories\NotificationRepository;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    protected $http;

    protected $notificationRepository;


    /**
     * CommentController constructor.
     * @param HttpResponse $http
     * @param NotificationRepository $notificationRepository
     */

    public function __construct(HttpResponse $http, NotificationRepository $notificationRepository)
    {
        $this->middleware('auth');
        $this->http = $http;
        $this->notificationRepository = $notificationRepository;

    }

    public function postComment(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'type' => 'required',
            'id' => 'required'
        ]);

        $data = $request->only('type', 'id', 'body');
        $model = getModel($data['type'])->find($data['id']);

        $comment = $model->comments()->create(['body' => $request->get('body')]);
        user()->comments()->save($comment);

        $this->notificationRepository->notify($comment, $model);

        return $comment;
    }

    public function updateComment(Request $request)
    {

    }


    public function deleteComment($id)
    {

    }


}
