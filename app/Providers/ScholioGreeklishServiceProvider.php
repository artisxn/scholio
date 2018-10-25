<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ScholioGreeklishServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('ScholioGreeklish', function(){
            return new App\Scholio\Greeklish;
        });
    }
}