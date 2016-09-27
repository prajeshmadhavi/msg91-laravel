<?php

namespace App\Listeners;

use App\Events\OnReportPostedEvent;


class ReportPostedListener
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
     * @param  OnResultPostedEvent  $event
     * @return void
     */
    public function handle(OnReportPostedEvent $event)
    {
        //Todo Send Email to notify all
    }
}
