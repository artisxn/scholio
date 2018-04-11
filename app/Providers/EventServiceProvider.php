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
            // 'App\Listeners\SendWelcomeEmail',
            'App\Listeners\SlackMessageForUserRegistration',
        ],
        'App\Events\UserAppliedOnSchool' => [
            'App\Listeners\UpdateRequestsTable',
            'App\Listeners\NotifySchool',
        ],
        'App\Events\SchoolConfirmsUser' => [
            'App\Listeners\ConnectUserWithSchool',
            'App\Listeners\CreateOrUpdateStudentCard',
        ],
        'App\Events\StudentAppliedOnScholarship' => [
            'App\Listeners\CreateRequestAndNotifySchool',
        ],

        'App\Events\NewSubscription' => [
            // notify school via email
            // notify us via slack 
            'App\Listeners\LoadScholarships',
            'App\Listeners\ChangeSubscriptionStatus',
        ]

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
