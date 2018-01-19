<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;

class NewSubscription
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $plan;
    public $limits;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $plan = null, $limits = null)
    {
        $this->user = $user;
        $this->plan = $plan;
        $this->limits = $limits;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('new-subscription');
    }
}
