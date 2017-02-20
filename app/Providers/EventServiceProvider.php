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
            'App\Listeners\SlackMessageForUserRegistration',
        ],
        'App\Events\UserAppliedOnSchool' => [
            'App\Listeners\NotifySchool',
        ],
        'App\Events\StudentAppliedOnTeacher' => [
            'App\Listeners\NotifyTeacher',
        ],
        'App\Events\SchoolConfirmsUser' => [
            'App\Listeners\ConnectUserWithSchool',
            'App\Listeners\NotifyUser',
        ],
        'App\Events\TeacherConfirmsStudent' => [
            'App\Listeners\ConnectStudentWithTeacher',
            'App\Listeners\NotifyStudent',
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
