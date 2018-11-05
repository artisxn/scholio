<?php

namespace App\Scholio;

class ScholioSeed
{
    public function seed()
    {
        $classes = $this->getClasses();

        foreach ($classes as $class) {
            try{
                \Artisan::call('db:seed', [
                    '--class' => $class,
                ]);
            }catch(\Exception $e){
                dd($e);
            }
            
        }

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
