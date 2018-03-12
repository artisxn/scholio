<?php

namespace App\Listeners;

use App\Events\NewSubscription;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\School;

class LoadScholarships implements ShouldQueue
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
     * @param  NewSubscription  $event
     * @return void
     */
    public function handle(NewSubscription $event)
    {
        if($limits = $event->limits){
            $school = School::where('user_id', $event->user->id)->first();

            foreach ($limits as $key => $limit) {
                $school->scholarshipLimits->{$key} += $limit;
                $school->scholarshipLimits->save();
            }
        }   
    }
}
