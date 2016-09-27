<?php

namespace App\Listeners;

use App\Events\OnStudentInviteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteStudentListener
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
     * @param  OnStudentInviteEvent  $event
     * @return void
     */
    public function handle(OnStudentInviteEvent $event)
    {
        $student = $event->student;
        $password = session('student_pwd');
        sendMail($student->email, "mails.invite_student", "Hi " . $student->name . ", You've been invited by " . $student->university->name, [$student->phone, $student->registration_id, $student->university->name]);
        //session()->forget('student_pwd');
    }
}
