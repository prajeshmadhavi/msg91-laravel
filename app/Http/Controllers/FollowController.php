<?php

namespace App\Http\Controllers;


use App\Events\OnFollowEvent;
use App\Events\SocialNotification;
use App\Http\Requests;
use App\Http\Response\HttpResponse;
use App\Models\Notification;
use App\Repositories\NotificationRepository;

class FollowController extends Controller
{

    protected $http;

    protected $notificationRepository;


    /**
     * FollowController constructor.
     * @param $followRepository
     * @param $http
     */

    public function __construct(HttpResponse $http,NotificationRepository $notificationRepository)
    {
        $this->middleware('auth');
        $this->http = $http;
        $this->notificationRepository = $notificationRepository;
        user()->setFollower();
    }

    public function follow($type, $id)
    {
        $follow = user()->follow($type, $id);
        $this->notificationRepository->notify($follow, $follow);
        return $follow;
    }

    public function unfollow($type, $id)
    {
        return user()->unfollow($type, $id);
    }


    public function isFollowing($type, $id)
    {
        $is_following = (int)user()->isFollowing($type, $id);
        return $this->http->respond($is_following);
    }

    public function followCount($type, $member)
    {
        $class = config('follow.' . $type);
        $model = new $class();
        $model = $model->find($member);
        $model->setFollower();
        return $model->followers_count();
    }

}
