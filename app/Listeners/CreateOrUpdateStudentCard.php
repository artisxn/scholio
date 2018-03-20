<?php

namespace App\Listeners;

use App\Events\SchoolConfirmsUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Card;
use App\Jobs\CreateStudentCard;

class CreateOrUpdateStudentCard implements ShouldQueue
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
        if($event->user->role == 'student'){
            if ($event->card && $event->card != 0) {
                $oldCard = Card::find($event->card);
                $oldCard->student_id = $event->user->id;
                $oldCard->role = 'student';
                $oldCard->save();
            }else{
                dispatch(new CreateStudentCard($event->school, $event->user, $event->status ,$event->type));
            }
        }
        
    }
}
