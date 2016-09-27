<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 15/08/16
 * Time: 2:57 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Contracts\Repository;
use App\Events\SocialNotification;
use App\Models\Notification;

class NotificationRepository extends Crud
{

    protected $model;

    /**
     * NotificationRepository constructor.
     * @param $model
     */
    public function __construct(Notification $model)
    {
        $this->model = $model;
    }

    public function notify($type, $notifiable)
    {
        $user = $this->owner($notifiable);
        $notification = $type->notifications()->create([
            'user_type' => get_class($user),
            'user_id' => $user->id
        ]);
        event(new SocialNotification($notification));
    }


    private function owner($model)
    {
        switch ($model->type)
        {
            case 'follow' :
                return $model->followed;
            break;
            case  'comment' :
                return $model->poster;
            break;
            case  'note' :
                return $model->poster;
                break;
            case  'topic' :
                return $model->poster;
                break;
            case  'project' :
                return $model->poster;
                break;
            case  'event' :
                return $model->poster;
                break;
            case  'news' :
                return $model->poster;
                break;
            case  'answer' :
                return $model->answerer;
                break;
        }
    }




}