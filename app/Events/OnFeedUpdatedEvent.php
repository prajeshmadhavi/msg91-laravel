<?php

namespace App\Events;

use App\Contracts\TimeLineFeed;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class OnFeedUpdatedEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $feed;


    /**
     * Create a new event instance.
     * OnFeedUpdatedEvent constructor.
     * @param TimeLineFeed $feed
     */

    public function __construct(TimeLineFeed $feed)
    {
        $this->feed = $feed;

    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $on = ['feed-posted'];

        if ($this->feed->privacy == ONLY_ME) {
            $on = ['only_me_' . md5($this->feed->poster->email)];
        }

//        if($this->feed->privacy == FOLLOWERS)
//        {
//            foreach (university()->students as $student)
//            {
//                $on[] = 'only_university_'.md5($student->email);
//            }
//        }

//        if ($this->feed->privacy == DEPARTMENT)
//        {
//            foreach (university()->department_members($this->feed->poster->department) as $member) {
//                $on[] = 'only_university_' . md5($member->email);
//            }
//        }

        return $on;
    }

    /**
     * Get the broadcast event name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'post';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return ['post' => $this->feed];
    }


}
