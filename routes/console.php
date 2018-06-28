<?php

use App\Jobs\Algolia;
use App\Models\School;
use App\Scholio\Scholio;
use Spatie\Sitemap\SitemapGenerator;

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

Artisan::command('scholio:sitemap', function () {
    foreach (School::all() as $school) {
        SitemapGenerator::create('https://schol.io/public/profile/' . $school->id)->writeToFile(public_path() . '/schoolsitemaps/sitemap' . $school->id . '.xml');
    }
})->describe('Generate a sitemap for the site');

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

Artisan::command('scholio:algolia', function () {
    foreach (School::all() as $school) {
        dispatch(new Algolia($school));
        $this->info('School ID: ' . $school->id . ' inserted!');
    }
})->describe('Insert Schools in Algolia');

Artisan::command('scholio:school_algolia {username?}', function () {
    $username = $this->argument('username');
    $user = App\User::where('username', $username)->first();
    if($user->role == 'school'){
        $school = $user->info;
        dispatch(new Algolia($school));
    }
})->describe('Insert School in Algolia');

Artisan::command('scholio:algoliaSchool {school}', function () {
    $schoolID = $this->argument('school');
    $school = School::find($schoolID);
    dispatch(new Algolia($school));
    $this->info('School ID: ' . $school->id . ' inserted!');
})->describe('Insert Schools in Algolia');

Artisan::command('scholio:algoliaScholarship {scholarship}', function () {
    $scholarshipID = $this->argument('scholarship');
    $scholarship = School::find($scholarshipID);
    dispatch(new Algolia($scholarship));
    $this->info('School ID: ' . $school->id . ' inserted!');
})->describe('Insert Schools in Algolia');
