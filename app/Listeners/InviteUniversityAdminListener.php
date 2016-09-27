<?php

namespace App\Listeners;

use App\Events\OnUniversityAdminInviteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteUniversityAdminListener
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
     * @param  OnUniversityAdminInviteEvent  $event
     * @return void
     */
    public function handle(OnUniversityAdminInviteEvent $event)
    {
        //
    }
}
