<?php

namespace App\Listeners;

use App\Events\SchoolConfirmsUser;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConnectUserWithSchool implements ShouldQueue
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
        //
    }
}
