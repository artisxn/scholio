<?php

namespace App\Providers;

use App\Models\School;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('panel.layouts.main', function ($view) {
            if (auth()->check()) {
                if (auth()->user()->role == 'school') {
                    $school = School::where('user_id', auth()->user()->id)->first();
                    $view->with('connection', $school);
                } else {
                    $user = auth()->user();
                    $view->with('connection', $user);
                }
            }
        });

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
