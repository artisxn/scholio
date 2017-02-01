<?php

use Illuminate\Database\Seeder;

class SchoolsFakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school1 = factory(App\Models\School::class)->create([
            'name' => 'ACT',
            'address' => 'sd',
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo', 'path' => 'public/rpo',
            ])->id,
        ]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'public/rpo']);

        $school1->image()->toggle($image1);
    }
}
