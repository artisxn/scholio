<?php

namespace App\Events;

use App\Models\School;
use App\Models\Study;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserAppliedOnSchool implements ShouldBroadcast
{
    public $user;
    public $school;
    public $study;
    public $status;

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, User $school, $study, $status)
    {
        $this->user = $user;
        $this->school = $school;
        $this->study = $study;
        $this->status = $status;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('school.' . $this->school->id, $this->user);
    }
}
