<?php

namespace App\Listeners;

use App\Events\OnSignInEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignInEventListener
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
     * @param  OnSignInEvent  $event
     * @return void
     */
    public function handle(OnSignInEvent $event)
    {
        //
    }
}
