<?php

namespace App\Listeners;

use App\Events\UserAppliedOnSchool;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateRequestsTable implements ShouldQueue
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
     * @param  UserAppliedOnSchool  $event
     * @return void
     */
    public function handle(UserAppliedOnSchool $event)
    {
        // $request = new Request;
        // $request->user_id = $event->user->id;
        // $request->school_id = $event->school->id;
    }
}
