<?php

use App\Models\Dummy;
use App\Models\School;
use App\Scholio\Scholio;
use App\Jobs\Algolia;

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

Artisan::command('noalgolia', function () {

    $schools = School::all();

    Dummy::query()->truncate();

    foreach ($schools as $s) {
        $dummy = new Dummy;
        $dummy->type_id = $s->type_id;
        $dummy->type = 'dfdsfsd';
        $dummy->study = 'dfdsfsd';
        $dummy->username = 'dfdsfsd';
        $dummy->school_id = $s->id;
        $dummy->name = $s->name();
        $dummy->email = $s->email();
        $dummy->phone = $s->phone;
        $dummy->city = $s->city;
        $dummy->address = $s->address;
        $dummy->logo = $s->logo;
        $dummy->image = $s->profileImage();
        $dummy->website = $s->website;
        $dummy->lengthStudents = $s->lengthStudents();
        $dummy->lengthTeachers = $s->lengthTeachers();
        $dummy->lengthStudies = $s->lengthStudies();
        $dummy->lengthScholarships = $s->lengthScholarships();
        $dummy->stars = 1.2;
        $dummy->reviews = 55;
        // $dummy->lat = $s->lat;
        // $dummy->lng = $s->lng;
        $dummy->save();
    }
    return 'OK';
});

Artisan::command('scholio:soon {prop}', function ($prop) {
    if ($prop) {
        if ($prop == 'on') {
            config(['app.soon' => true]);
            $this->comment('Comming Sonn page is ON!');
        } else if ($prop == 'off') {
            config(['app.soon' => false]);
            $this->comment('Comming Sonn page is OFF!');
        } else {
            $this->comment('Error!');
        }

    }
});

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
        // $this->info('Dummy Data Table is Flooded!');
    } else {
        $this->error('Something went wrong');
    }

})->describe('Flood the Dummy Data Table');

Artisan::command('scholio:refresh {--s|show} {--a|algolia} {schools?}', function () {

    $show = $this->option('show');
    $algolia = $this->option('algolia');
    $schools = $this->argument('schools');

    if (!$algolia) {
        $this->call('migrate:refresh', ['--force' => true]);
        $this->info('Migrate Refresh Done!');
        $this->call('db:seed');
        if ($schools) {
            for ($i = 0; $i < (int) $schools; $i++) {
                factory(App\Models\School::class)->create(['user_id' => factory(App\User::class)->create(['role' => 'school'])->id]);
            }
        }
        $this->info('Database Seeding Done!');
    } else {
        if ($show) {
            $this->call('migrate:refresh', ['--force' => true]);
            $this->info('Migrate Refresh Done!');
            $this->call('db:seed');
            if ($schools) {
                for ($i = 0; $i < (int) $schools; $i++) {
                    factory(App\Models\School::class)->create(['user_id' => factory(App\User::class)->create(['role' => 'school'])->id]);
                }
            }
            $this->info('Database Seeding Done!');
            $this->call('scholio:dummy');
            $this->info('Dummy Data Table is Flooded!');
        } else {
            $this->callSilent('migrate:refresh', ['--force' => true]);
            $this->info('Migrate Refresh Done!');
            $this->callSilent('db:seed');
            if ($schools) {
                for ($i = 0; $i < (int) $schools; $i++) {
                    factory(App\Models\School::class)->create(['user_id' => factory(App\User::class)->create(['role' => 'school'])->id]);
                }
            }
            $this->info('Database Seeding Done!');
            $this->callSilent('scholio:dummy');
            $this->info('Dummy Data Table is Flooded!');
        }

    }

})->describe('Refresh the Scholio App');

Artisan::command('scholio:algolia', function(){
    foreach(School::all() as $school){
        dispatch(new Algolia($school));
        $this->info('School ID: ' . $school->id . ' inserted!');
    }
})->describe('Insert Schools in Algolia');
