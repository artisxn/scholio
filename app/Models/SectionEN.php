<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionEN extends Model
{
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
    public function study()
    {
        return $this->belongsToMany(Study::class, 'section_study', 'study_id')->withTimestamps();
    }
}
