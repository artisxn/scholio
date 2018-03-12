<?php

namespace App\Listeners;

use App\Events\StudentAppliedOnTeacher;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyTeacher implements ShouldQueue
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
     * @param  StudentAppliedOnTeacher  $event
     * @return void
     */
    public function handle(StudentAppliedOnTeacher $event)
    {
        //
    }
}
