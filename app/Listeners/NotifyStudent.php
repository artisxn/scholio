<?php

namespace App\Listeners;

use App\Events\TeacherConfirmsStudent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyStudent
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
     * @param  TeacherConfirmsStudent  $event
     * @return void
     */
    public function handle(TeacherConfirmsStudent $event)
    {
        //
    }
}
