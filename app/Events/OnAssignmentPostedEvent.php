<?php

namespace App\Events;

use App\Events\Event;
use App\Models\Assignment;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OnAssignmentPostedEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $assignment;


    /**
     * Create a new event instance.
     * OnAssignmentPostedEvent constructor.
     * @param Assignment $assignment
     */
    public function __construct(Assignment $assignment)
    {
        $this->assignment = $assignment;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $students = [];
        foreach ($this->assignment->student as $student)
        {
            $students[] = 'notify_me_'.md5($student->email);
        }
        return $students;
    }

    /**
     * Get the broadcast event name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'assignment-posted';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        unset($this->assignment->student);
        return ['assignment' => $this->assignment];
    }
}
