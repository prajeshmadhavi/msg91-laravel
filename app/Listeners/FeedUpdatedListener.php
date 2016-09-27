<?php

namespace App\Listeners;

use App\Events\OnFeedUpdatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedUpdatedListener
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
     * @param  OnFeedUpdatedEvent  $event
     * @return void
     */
    public function handle(OnFeedUpdatedEvent $event)
    {
        //
    }
}
