<?php

namespace App\Models;

use App\Models\Level;
use App\Models\SchoolTypes;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function school_type()
    {
        return $this->belongsTo(SchoolTypes::class);
    }

    public function level()
    {
        return $this->belongsToMany(Level::class, 'level_study')->withTimestamps();
    }

    public function section()
    {
        return $this->belongsToMany(Section::class, 'section_study');
    }

    public function school()
    {
        return $this->belongsToMany(School::class, 'school_study')->withTimestamps();
    }
}
