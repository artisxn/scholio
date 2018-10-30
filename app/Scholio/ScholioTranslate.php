<?php

namespace App\Scholio;

use App\Models\School;
use App\Models\SchoolTypes;
use App\Models\Translation;
use Facades\App\Scholio\Greeklish;

class ScholioTranslate
{
    public function greeklish($text)
    {
        return Greeklish::make($text);
    }

    public function original($text)
    {
        return Translation::where('greeklish', $text)->get()->first()->original;
    }

    public function translate($text)
    {
        return Translation::where('original', $text)->get()->first()->greeklish;
    }

    public function refresh()
    {
        Translation::truncate();

        foreach (SchoolTypes::all() as $type) {

            $this->saveTranslation($type->plural);

            $cities = School::where('type_id', $type->id)->select('city')->distinct()->get();
            $regions = School::where('type_id', $type->id)->select('region')->distinct()->get();


            foreach ($cities as $city) {
                $this->saveTranslation($city['city']);
            }

            foreach($regions as $region){
                $this->saveTranslation($region['region']);
            }
        }
    }

    public function saveTranslation($original)
    {
        $greeklish = $this->greeklish($original);

        $trans = new Translation();
        $trans->original = $original;
        $trans->greeklish = $greeklish;
        $trans->save();
    }
}
