<?php

namespace App\Scholio;

use App\Models\School;
use Facades\App\Scholio\ScholioTranslate;
use Facades\App\Scholio\Scholio;

class ScholioSeed
{
    public function run($class)
    {
        $this->prepeareForSeed();

        try {
            \Artisan::call('db:seed', ['--class' => $class]);
        } catch (\Exception $e) {
            dd($e);
        }

        $this->afterInsertionsConfigs();

    }

    public function seed($class)
    {
        \Artisan::call('db:seed', ['--class' => $class]);
    }

    public function afterInsertionsConfigs()
    {

    }

    public function algolia()
    {
        Scholio::algoliaNots();
    }

    public function refreshScholioTranslations()
    {
        ScholioTranslate::refresh();
    }

    public function dummyLevelsData()
    {
        Scholio::dummyLevelsDataNots();
    }

    public function seoRegion()
    {
        Scholio::updateSeoRegion();
    }

    public function makeWebpImages($from)
    {
        foreach (School::where('id', '>', $from)->get() as $school) {
            Scholio::makeWebp($school->logo);
            foreach ($school->image() as $image) {
                Scholio::makeWebp($image->full_path);
            }
        }

        return $this;
    }

    public function getClasses()
    {
        return config('scholio.seedClasses');
    }

    public function prepeareForSeed()
    {
        if (!\App::environment('local')) {
            $this->backupDB();
        }

    }

    public function backupDB()
    {
        return Scholio::backupDB();
    }
}
