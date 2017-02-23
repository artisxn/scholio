<?php

use App\Scholio\Scholio;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
 */

Artisan::command('scholio:init {--s|show}', function () {
    $show = $this->option('show');

    $this->comment('Scholio initialization is started!');

    $allCommands = [
        ['name' => 'composer', 'settings' => [], 'message' => 'New Passport Keys are Generated!'],
        ['name' => 'migrate:refresh', 'settings' => ['--force' => true], 'message' => 'Migrate Refresh Done!'],
        ['name' => 'db:seed', 'settings' => [], 'message' => 'Database Seeding Done!'],
        ['name' => 'scholio:dummy', 'settings' => [], 'message' => 'Dummy Data Table is Flooded!'],
        ['name' => 'passport:keys', 'settings' => [], 'message' => 'Composer Installed all Dependencies!'],
        ['name' => 'dev', 'settings' => [], 'message' => 'Webpack Compiled all JS and CSS Files!'],
    ];

    $bar = $this->output->createProgressBar(count($allCommands));

    foreach ($allCommands as $command) {
        if ($command['name'] == 'dev') {
            shell_exec('npm run dev');
        } else if ($command['name'] == 'composer') {
            shell_exec('composer install');
        } else {
            if ($show) {
                $this->call($command['name'], $command['settings']);
            } else {
                $this->callSilent($command['name'], $command['settings']);
            }
        }

        $bar->advance();
        $this->info(' - ' . $command['message']);
    }
})->describe('Initialiaze the Scholio app in fresh install');

Artisan::command('scholio:dummy', function () {
    $this->comment('Scholio Dummy Table is gooing to be filled!');

    $dummy = Scholio::fakeDummy();
    if ($dummy == 'OK') {
        $this->info('Dummy Data Table is Flooded!');
    } else {
        $this->error('Something went wrong');
    }

})->describe('Flood the Dummy Data Table');

Artisan::command('scholio:refresh {--s|show}', function () {

    $show = $this->option('show');

    if ($show) {
        $this->call('migrate:refresh', ['--force' => true]);
        $this->info('Migrate Refresh Done!');
        $this->call('db:seed');
        $this->info('Database Seeding Done!');
        $this->call('scholio:dummy');
        $this->info('Dummy Data Table is Flooded!');
    } else {
        $this->callSilent('migrate:refresh', ['--force' => true]);
        $this->info('Migrate Refresh Done!');
        $this->callSilent('db:seed');
        $this->info('Database Seeding Done!');
        $this->callSilent('scholio:dummy');
        $this->info('Dummy Data Table is Flooded!');
    }

})->describe('Refresh the Scholio App');
