<?php

namespace App\Events;

use App\Models\Notification;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class SocialNotification extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $notification;

    /**
     * Create a new event instance.
     * OnFollowEvent constructor.
     * @param Follower $follow
     */
    public
    function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public
    function broadcastOn()
    {
        return ['notify_me_' . md5($this->notification->user->email)];
    }

    /**
     * Get the broadcast event name.
     *
     * @return string
     */
    public
    function broadcastAs()
    {
        return  'notification';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public
    function broadcastWith()
    {
        return [$this->notification->type => $this->notification];
    }
}
