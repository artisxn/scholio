<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Study extends Model
{

    // use \Laravel\Scout\Searchable;
    /**
     *  Gets the school type that offeres this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->section[0]->level->type;
    }

    /**
     *  Gets the level of this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function level()
    {
        // if (request()->cookie('lang') == 'en') {
        //     return $this->sectionEN[0]->level;
        // }

        return $this->section[0]->level;
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

    // public function sectionEN()
    // {
    //     return $this->belongsToMany(SectionEN::class, 'section_study', 'study_id', 'section_id');
    // }

    /**
     *  Gets the school that offers this study
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function school()
    {
        return $this->belongsToMany(School::class, 'school_study')->withTimestamps();
    }

    /**
    * @return 
    */
    public function user()
    {
        return $this->belongsToMany(User::class, 'study_user');
    }
}
