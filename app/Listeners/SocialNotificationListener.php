<?php

namespace App\Listeners;

use App\Events\SocialNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SocialNotificationListener
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
     * @param  SocialNotification  $event
     * @return void
     */
    public function handle(SocialNotification $event)
    {
        //
    }
}
