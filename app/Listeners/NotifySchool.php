<?php

namespace App\Listeners;

use App\Events\UserAppliedOnSchool;
use App\Notifications\UserAppliedForConnection;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifySchool implements ShouldQueue
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
        $event->school->notify(new UserAppliedForConnection($event->user, $event->school, $event->study, $event->status));
    }
}
