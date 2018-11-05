<?php

namespace App\Scholio;

use Facades\App\Scholio\Scholio;

class ScholioSeed
{
    public function seed()
    {

        $classes = $this->getClasses();

        // $this->prepeareForSeed();

        foreach ($classes as $class) {
            try {

            } catch (\Exception $e) {
                dd($e);
            }
        }

        $this->afterInsertionsConfigs();

    }

    public function afterInsertionsConfigs()
    {
        $this->algolia()->dummyLevelsData()->seoRegion();
    }

    public function algolia()
    {
        // Do algolia stuff
        return $this;
    }

    public function refreshScholioTranslations()
    {
        ScholioTranslate::refresh();
        return $this;
    }

    public function dummyLevelsData()
    {
        // Do dummy levs stuff
        return $this;
    }

    public function seoRegion()
    {
        Scholio::updateSeoRegion();
        return $this;
    }

    public function getClasses()
    {
        return config('scholio.seedClasses');
    }

    public function prepeareForSeed()
    {
        $this->backupDB();

    }

    public function backupDB()
    {
        return Scholio::backupDB();
    }
}
