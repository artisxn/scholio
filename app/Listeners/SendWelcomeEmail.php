<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Notifications\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SchoolRegister;
use App\Mail\UserRegister;

class SendWelcomeEmail implements ShouldQueue
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
        if($this->event->user->role == 'school'){
            Mail::to($this->event->user->email)->queue(new SchoolRegister($this->event->user));
        }else{
            Mail::to($this->event->user->email)->queue(new UserRegister($this->event->user));
        }
    }
}
