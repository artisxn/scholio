<?php

namespace App\Listeners;

use App\Events\StudentAppliedOnScholarship;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateRequest implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StudentAppliedOnScholarship  $event
     * @return void
     */
    public function handle(StudentAppliedOnScholarship $event)
    {
        $request = Request::create(['type' => 'scholarship', 'user_id' => $event->user->id, 'school_id' => $event->school->id]);
    }
}
