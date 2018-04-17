<?php

use App\Models\Image;
use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Subscription;
use App\User;
use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\ScholarshipLimit;
use App\Scholio\Scholio;

class FakeSeederCopy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = '/upload/school/1/1.jpg';
        $back1 = $this->createImages('/upload/school/1/1.jpg');
        $back2 = $this->createImages($path);
        $back3 = $this->createImages($path);
        $back4 = $this->createImages($path);
        $back5 = $this->createImages($path);
        $back6 = $this->createImages($path);
        $back7 = $this->createImages($path);
        $back8 = $this->createImages($path);
        $back9 = $this->createImages($path);
        $back10 = $this->createImages($path);
        $back11 = $this->createImages($path);
        $back12 = $this->createImages($path);
        $back13 = $this->createImages($path);
        $back14 = $this->createImages($path);
        $back15 = $this->createImages($path);
        $back16 = $this->createImages($path);
        $back17 = $this->createImages($path);
        $back18 = $this->createImages($path);
        $back19 = $this->createImages($path);
        $back20 = $this->createImages($path);
        $back21 = $this->createImages($path);
        $back22 = $this->createImages($path);
        $back23 = $this->createImages($path);
        $back24 = $this->createImages($path);
        $back25 = $this->createImages($path);
        $back26 = $this->createImages($path);
        $back27 = $this->createImages($path);
        $back28 = $this->createImages($path);
        $back29 = $this->createImages($path);
        $back30 = $this->createImages($path);
        $back31 = $this->createImages($path);
        $back32 = $this->createImages($path);
        $back33 = $this->createImages($path);
        $back34 = $this->createImages($path);
        $back35 = $this->createImages($path);
        $back36 = $this->createImages($path);
        $back37 = $this->createImages($path);
        $back38 = $this->createImages($path);
        $back39 = $this->createImages($path);
        $back40 = $this->createImages($path);
        $back41 = $this->createImages($path);
        $back42 = $this->createImages($path);


        $this->insertImages($school1, '/upload/school/1/', 5);
        $this->insertImages($school2, '/upload/school/2/', 5);
        $this->insertImages($school3, '/upload/school/3/', 5);
        $this->insertImages($school4, '/upload/school/4/', 5);
        $this->insertImages($school5, '/upload/school/5/', 5);
        $this->insertImages($school6, '/upload/school/6/', 5);
        $this->insertImages($school7, '/upload/school/7/', 5);
        $this->insertImages($school8, '/upload/school/8/', 5);

        $this->makeSettings();
    }

    public function makeSettings()
    {
        foreach (School::all() as $school) {
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
