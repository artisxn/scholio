<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 5 Schools and 5 Images of each School
        for ($i = 0; $i < 5; $i++) {
            $school = factory(App\Models\School::class)->create();
            for ($j = 0; $j < 5; $j++) {
                $school->image()->toggle(factory(App\Models\Image::class)->create());
            }
        }
    }
}
