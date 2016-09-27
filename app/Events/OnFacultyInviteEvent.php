<?php

namespace App\Events;

use App\Events\Event;
use App\Models\Faculty;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OnFacultyInviteEvent extends Event
{
    use SerializesModels;

    public $faculty;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Faculty $faculty)
    {
        $this->faculty = $faculty;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
