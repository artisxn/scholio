<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Listeners\SlackMessageForUserRegistration;
use App\Notifications\SlackUserRegistered;

class SlackMessageForUserRegistration implements ShouldQueue
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $event->user->notify(new SlackUserRegistered($event->user));
    }
}
