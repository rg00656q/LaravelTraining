<?php

namespace App\Events;

use App\Models\Discussion;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReadNotificationsEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $discussion;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Discussion $discussion)
    {
        $this->discussion = $discussion;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
