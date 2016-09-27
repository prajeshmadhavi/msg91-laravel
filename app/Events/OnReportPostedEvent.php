<?php

namespace App\Events;

use App\Contracts\Report;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OnReportPostedEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    protected $report;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Report $report)
    {
        $this->report   = $report;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $to_user = md5($this->report->student->email);
        return ['notify_me_'.$to_user];
    }

    /**
     * Get the broadcast event name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'report-posted';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [$this->report->type => $this->report];
    }

}
