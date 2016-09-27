<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\OnSignInEvent' => [
            'App\Listeners\SignInEventListener',
        ],
        'App\Events\OnStudentInviteEvent' => [
            'App\Listeners\InviteStudentListener',
        ],
        'App\Events\OnFacultyInviteEvent' => [
            'App\Listeners\InviteFacultyListener',
        ],
        'App\Events\OnUniversityAdminInviteEvent' => [
            'App\Listeners\InviteUniversityAdminListener',
        ],
        'App\Events\OnReportPostedEvent' => [
            'App\Listeners\ReportPostedListener',
        ],
        'App\Events\OnAssignmentPostedEvent' => [
            'App\Listeners\AssignmentPostedListener',
        ],
        'App\Events\OnFeedUpdatedEvent' => [
            'App\Listeners\FeedUpdatedListener',
        ],
        'App\Events\SocialNotification' => [
            'App\Listeners\SocialNotificationListener',
        ],
         'App\Events\TOTPSent' => [
            'App\Listeners\TOTPSentListener',
        ]

    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);
        //
    }
}
