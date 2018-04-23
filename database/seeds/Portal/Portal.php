<?php

namespace Portal;

use App\Models\Image;
use App\Models\ScholarshipLimit;
use App\Models\SchoolSetting;
use App\Models\Subscription;
use App\Models\University;
use App\Scholio\Scholio;

class Portal
{
    public $school, $imgNum, $type;

    public function __construct($school, $imgNum, $type)
    {
        $this->school = $school;
        $this->imgNum = $imgNum;
        $this->type = $type;

        $this->schoolComplete();
    }

    public function schoolComplete()
    {
        $this->school->background = self::createImages('/upload/school/' . $this->school->admin->username . '/1.jpg')->id;
        $this->school->logo = '/upload/avatar/'. $this->type . '_' . $this->school->id . '.png';
        $this->school->save();
        $this->school->image()->toggle($this->school->background);
        $this->makeSettings();
        $this->insertImages('/upload/school/' . $this->school->admin->username . '/', $this->imgNum);
    }

    public function makeSettings()
    {
        $scholarshipLimit = new ScholarshipLimit;
        $scholarshipLimit->school_id = $this->school->id;
        $scholarshipLimit->cr1 = 10;
        $scholarshipLimit->cr2 = 6;
        $scholarshipLimit->cr3 = 2;
        $scholarshipLimit->cr4 = 2;
        $scholarshipLimit->cr5 = 1;
        $scholarshipLimit->save();

        $university = new University;
        $university->name = $this->school->admin->name;
        $university->save();

        $subscription = new Subscription;
        $subscription->user_id = $this->school->admin->id;
        $subscription->save();

        $settings = new SchoolSetting;
        $settings->school_id = $this->school->id;
        $settings->save();

        $address = Scholio::geocode($this->school->address . ', ' . $this->school->city);
        if ($address == 'GEOCODE ERROR') {
            dd($address);
        } else {
            if ($this->school->lat == null) {
                try {
                    $lat = $address['lat'];
                    $lng = $address['lng'];
                    $this->school->lat = $lat;
                    $this->school->lng = $lng;
                    $this->school->save();
                } catch (Exception $e) {
                }
            }
        }
    }

    public function insertImages($path, $until)
    {
        for ($i = 2; $i <= $until; $i++) {
            $image = self::createImages($path . $i . '.jpg');
            $this->school->image()->toggle($image);
        }
    }

    public static function createImages($path)
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
