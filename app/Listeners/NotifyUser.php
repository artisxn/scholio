<?php

namespace App\Listeners;

use App\Events\SchoolConfirmsUser;
use App\Notifications\SchoolAcceptedUser;

class NotifyUser
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
     * @param  SchoolConfirmsUser  $event
     * @return void
     */
    public function handle(SchoolConfirmsUser $event)
    {
        $event->user->notify(new SchoolAcceptedUser($event->user, $event->school));
    }
}
