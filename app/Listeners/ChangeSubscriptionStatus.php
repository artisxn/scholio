<?php

namespace App\Listeners;

use App\Events\NewSubscription;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Subscription;

class ChangeSubscriptionStatus implements ShouldQueue
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
        if($plan = $event->plan){
            $user = $event->user;

            $user->subscription->plan_id = $plan;
            $user->subscription->save();
        }
        
    }
}
