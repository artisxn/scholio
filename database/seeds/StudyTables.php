<?php

use Illuminate\Database\Seeder;

class StudyTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelsTableSeeder::class);      // Levels
        $this->call(SectionsTableSeeder::class);    // Sections
        $this->call(StudiesTableSeeder::class);     // Studies
    }
}
