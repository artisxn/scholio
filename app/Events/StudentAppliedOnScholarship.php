<?php

namespace App\Events;

use App\Models\Scholarship;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StudentAppliedOnScholarship
{
    public $user;
    public $scholarship;
    public $school;

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, Scholarship $scholarship)
    {
        $this->user = $user;
        $this->scholarship = $scholarship;
        $this->school = $scholarship->school->admin;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('scholarships');
    }
}
