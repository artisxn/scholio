<?php

namespace App\Models;

use App\Models\SchoolTypes;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function type()
    {
        return $this->belongsTo(SchoolTypes::class, 'school_type_id');
    }

    public function section()
    {
        return $this->hasMany(Section::class);
    }
}
