<?php

namespace App\Listeners;

use App\Events\UserAppliedOnSchool;
use App\Notifications\UserAppliedForConnection;

class NotifySchool
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
        $event->school->notify(new UserAppliedForConnection($event->user, $event->school));
    }
}
