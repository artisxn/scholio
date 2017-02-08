<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Listeners\SlackMessageForUserRegistration;

class SlackMessageForUserRegistration
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
        $this->notify(new SlackMessageForUserRegistration($event->user));
    }
}
