<?php

namespace App\Listeners;

use App\Events\OnAssignmentPostedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignmentPostedListener
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
     * @param  OnAssignmentPostedEvent  $event
     * @return void
     */
    public function handle(OnAssignmentPostedEvent $event)
    {
        $assignment = $event->assignment;
    }
}
