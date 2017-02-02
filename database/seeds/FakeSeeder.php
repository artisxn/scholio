<?php

use App\Models\Scholarship;
use App\Models\Study;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
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
            'user_id' => factory(App\User::class)->create(['name' => 'Apostolos', 'email' => 'apostolos@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Σεβενίδη, 17, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'email' => 'webmaster@act.edu',
            'phone' => 2310,
            'type_id' => 1,
            'website' => 'www.act.edu',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/act-logo.png',
                'full_path' => 'fake/act-logo.png',
                'name' => 'fake/act-logo.png',
                'extension' => 'png',
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic1.jpg', 'full_path' => 'fake/act-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic2.jpg', 'full_path' => 'fake/act-pic2.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);

        $this->createStudy($school, [203, 204, 206, 244, 245, 317, 318]);
        $this->createUsers($school, 'students', [1, 2]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(1);

        $school = factory(App\Models\School::class)->create([
            'name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης',
            'user_id' => factory(App\User::class)->create(['name' => 'Kostis', 'email' => 'kostis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@metropolitan.edu.gr',
            'phone' => 2310,
            'type_id' => 1,
            'website' => 'www.mitropolitiko.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/amc-logo.png',
                'full_path' => 'fake/amc-logo.png',
                'name' => 'fake/amc-logo.png',
                'extension' => 'png',
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/AMC-pic1.jpg', 'full_path' => 'fake/AMC-pic1.jpg']);
        $school->image()->toggle($image1);

        $school = factory(App\Models\School::class)->create([
            'name' => 'ΑΚΜΗ',
            'user_id' => factory(App\User::class)->create(['name' => 'Christos', 'email' => 'christos@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Τσιμισκή 14',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@iek-akmi.edu.gr',
            'phone' => 2310,
            'type_id' => 2,
            'website' => 'www.iek-akmi.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/akmi-logo.png',
                'full_path' => 'fake/akmi-logo.png',
                'name' => 'fake/akmi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic1.jpg', 'full_path' => 'fake/akmi-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic2.jpg', 'full_path' => 'fake/akmi-pic2.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
    }

    public function createStudy($school, $id)
    {
        foreach ($id as $key) {
            $school->study()->attach(Study::find($key));
        }
    }

    public function createUsers($school, $type, $id)
    {
        if ($type == 'student') {
            foreach ($id as $key) {
                $school->students()->toggle(User::find($key));
            }
        } else {
            foreach ($id as $key) {
                $school->teachers()->toggle(User::find($key));
            }
        }
    }

    public function createScholarship($id)
    {
        $scholarship = new Scholarship;
        $scholarship->school_id = $id;
        $scholarship->financial_id = 1;
        $scholarship->financial_amount = 10;
        $scholarship->study_id = 203;
        $scholarship->level_id = 2;
        $scholarship->criteria_id = 3;
        $scholarship->winner_id = 1;
        $scholarship->end_at = Carbon::now();
        $scholarship->save();
    }

}
