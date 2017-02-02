<?php

namespace App\Models;

use App\Models\Level;
use App\Models\SchoolTypes;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    /**
     *  Gets the school type that offeres this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school_type()
    {
        return $this->belongsTo(SchoolTypes::class);
    }

    /**
     *  Gets the level of this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function level()
    {
        return $this->belongsToMany(Level::class, 'level_study')->withTimestamps();
    }

    /**
     *  Gets the section of this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function section()
    {
        return $this->belongsToMany(Section::class, 'section_study');
    }

    /**
     *  Gets the school that offers this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function school()
    {
        return $this->belongsToMany(School::class, 'school_study')->withTimestamps();
    }
}
