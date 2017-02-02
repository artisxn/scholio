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
        $school = factory(App\Models\School::class)->create([
            'name' => 'American College of Thessaloniki',
            'user_id'=>16,
            'address' => 'Σεβενίδη, 17, Πυλαία',
            'city'=>'Θεσσαλονίκη',
            'email'=>'webmaster@act.edu',
            'phone'=>2310,
            'type_id'=>1,
            'website'=>'www.act.edu',
            'approved'=>1,
                'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/act-logo.png',
                'full_path' => 'fake/act-logo.png',
                'name'=>'fake/act-logo.png',
                'extension'=>'png'
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic1.jpg','full_path' => 'fake/act-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic2.jpg','full_path' => 'fake/act-pic2.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);



        $school= factory(App\Models\School::class)->create([
            'name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης',
            'user_id'=>17,
            'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
            'city'=>'Θεσσαλονίκη',
            'email'=>'info@metropolitan.edu.gr',
            'phone'=>2310,
            'type_id'=>1,
            'website'=>'www.mitropolitiko.edu.gr',
            'approved'=>1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/amc-logo.png',
                'full_path' => 'fake/amc-logo.png',
                'name'=>'fake/amc-logo.png',
                'extension'=>'png'
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/AMC-pic1.jpg','full_path' => 'fake/AMC-pic1.jpg']);
        $school->image()->toggle($image1);


        $school= factory(App\Models\School::class)->create([
            'name' => 'ΑΚΜΗ',
            'user_id'=>18,
            'address' => 'Τσιμισκή 14',
            'city'=>'Θεσσαλονίκη',
            'email'=>'info@iek-akmi.edu.gr',
            'phone'=>2310,
            'type_id'=>2,
            'website'=>'www.iek-akmi.edu.gr',
            'approved'=>1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/akmi-logo.png',
                'full_path' => 'fake/akmi-logo.png',
                'name'=>'fake/akmi-logo.png',
                'extension'=>'png'
            ])->id,
        ]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic1.jpg','full_path' => 'fake/akmi-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic2.jpg','full_path' => 'fake/akmi-pic2.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);

    }
}
