<?php

use App\Models\Image;
use App\Models\ScholarshipLimit;
use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Subscription;
use App\Models\SchoolSetting;

class Colleges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = $this->createImages('/upload/school/univ.png')->id;

        $logo1 = '/upload/avatar/college_1.png';

        /*===============   1 ACT   ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 1,
            'type_id' => 1,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'logo' => $logo1,
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', '', '', '');

        

        $school1->background = $this->createImages('/upload/school/' . $school1->id . '/1.jpg')->id;
        $school1->save();

        $this->makeSettings($school1);

        $this->insertImages($school1, '/upload/school/1/', 5);
    }

    public function makeSettings($school)
    {
        $scholarshipLimit = new ScholarshipLimit;
        $scholarshipLimit->school_id = $school->id;
        $scholarshipLimit->cr1 = 10;
        $scholarshipLimit->cr2 = 6;
        $scholarshipLimit->cr3 = 2;
        $scholarshipLimit->cr4 = 2;
        $scholarshipLimit->cr5 = 1;
        $scholarshipLimit->save();

        $university = new University;
        $university->name = $school->admin->name;
        $university->save();

        $subscription = new Subscription;
        $subscription->user_id = $school->admin->id;
        $subscription->save();

        $settings = new SchoolSetting;
        $settings->school_id = $school->id;
        $settings->save();

        $address = Scholio::geocode($school->address . ', ' . $school->city);
        if ($address == 'GEOCODE ERROR') {
            dd($address);
        } else {
            try {
                $lat = $address['lat'];
                $lng = $address['lng'];
                $school->lat = $lat;
                $school->lng = $lng;
                $school->save();
            } catch (Exception $e) {
            }
        }
    }

    public function insertImages($school, $path, $until)
    {
        for ($i = 2; $i <= $until; $i++) {
            $image = $this->createImages($path . $i . '.jpg');
            $school->image()->toggle($image);
        }
    }

    public function createImages($path)
    {
        $image = new Image;
        $image->full_path = $path;
        $image->path = $path;
        $image->name = $path;
        $image->extension = 'jpg';
        $image->alt = 'School Image';
        $image->save();

        return $image;
    }
}
