<?php

namespace App\Listeners;

use App\Events\TeacherAppliedToSchool;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
     * @param  TeacherAppliedToSchool  $event
     * @return void
     */
    public function handle(TeacherAppliedToSchool $event)
    {
        //
    }
}
