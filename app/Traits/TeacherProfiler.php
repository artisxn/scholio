<?php
namespace App\Traits;

use App\Models\Certificate;
use App\Models\Skill;
use App\Models\Work;

trait TeacherProfiler
{
    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_user')->withPivot('user_from_id')->withTimestamps();
    }
}
