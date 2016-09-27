<?php

namespace App\Listeners;

use App\Events\OnFacultyInviteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteFacultyListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  OnFacultyInviteEvent  $event
     * @return void
     */
    public function handle(OnFacultyInviteEvent $event)
    {
        $faculty = $event->faculty;
        $password = session('faculty_pwd');
        sendMail($faculty->email, "mails.invite_faculty", "Hello, " . $faculty->name . ", You've been invited by " . $faculty->university->name, [$faculty->email, $password, $faculty->university->name]);
        session()->forget('faculty_pwd');
    }
}
