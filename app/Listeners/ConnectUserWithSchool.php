<?php

namespace App\Listeners;

use App\Events\SchoolConfirmsUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Study;

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
        if ($event->user->role == 'teacher') {
            $event->school->users()->attach($event->user, ['type' => $event->type, 'status' => $event->status]);
        } else {
            $study = Study::find($event->type);
            $event->school->users()->attach($event->user, ['type' => $study->name, 'status' => $event->status, 'study_id' => $event->type, 'level' => $study->section[0]->level->name]);
            $study->user()->attach($event->user, ['school_id' => $event->school->id]);
        }
    }
}
