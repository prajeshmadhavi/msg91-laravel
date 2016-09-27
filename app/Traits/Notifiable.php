<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 15/08/16
 * Time: 8:14 PM
 */

namespace App\Traits;


use App\Models\Notification;

trait Notifiable
{
    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notification');
    }
}