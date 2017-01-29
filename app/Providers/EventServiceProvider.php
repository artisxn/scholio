<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserRegistered' => [
            'App\Listeners\SendWelcomeEmail',
            'App\Listeners\NotifyAdmin',
        ],
        'App\Events\StudentAppliedToSchool' => [
            'App\Listeners\NotifySchool',
        ],
        'App\Events\TeacherAppliedToSchool' => [
            'App\Listeners\NotifySchool',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
