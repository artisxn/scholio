<?php
namespace App\Traits;

use App\Models\Skill;

trait EndorseSystem
{
    public function checkSkill($endorsement)
    {
        foreach ($this->skills as $skill) {
            if ($skill->id == $endorsement->id && $skill->pivot->user_from_id == auth()->user()->id) {
                return true;
            }
        }

        return false;
    }

    public function endorse($skill)
    {
        $this->skills()->save($skill, ['user_from_id' => auth()->user()->id]);
    }

    public function toggleEndorsement($skill)
    {
        // Πρέπει να ελένξουμε αν ο auth user είναι connected με το σχολειο του καθηγητη
        if ($this->checkSkill($skill)) {
            $this->skills()->wherePivot('user_from_id', auth()->user()->id)->detach($skill);
            return ('ON');
        } else {
            $this->endorse($skill);
            return ('OFF');
        }
    }

    public function countSkill($skill)
    {
        return $user->skills()->where('skill_id', $skill->id)->count();
    }

    public function getUniqueSkills()
    {
        $array = [];
        foreach ($this->skills as $skill) {
            if (!in_array($skill->id, $array)) {

                array_push($array, $skill->id);
            }
        }

        $unique = [];
        foreach ($array as $skillID) {
            $skill = Skill::find($skillID);
            array_push($unique, $skill);
        }

        return collect($unique);
    }
}
