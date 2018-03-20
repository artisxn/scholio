<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\School;

class SchoolConfirmsUser
{
    public $user;
    public $school;
    public $card;
    public $type, $status;

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(School $school, User $user,  $card = null, $type = null, $status = 'connected')
    {
        $this->user = $user;
        $this->school = $school;
        $this->card = $card;
        $this->type = $type; // Study
        $this->status = $status;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('school-confirms-user');
    }
}
