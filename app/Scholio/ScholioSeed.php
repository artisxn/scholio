<?php

namespace App\Scholio;

use Facades\App\Scholio\Scholio;

class ScholioSeed
{
    public function seed()
    {
        Scholio::backupDB();
        $classes = $this->getClasses();

        // foreach ($classes as $class) {
        //     try{
        //         Scholio::backupDB();
        //     }catch(\Exception $e){
        //         dd($e);
        //     }
            
        // }

    }

    public function check($class)
    {

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
        // Backup
    }
}
