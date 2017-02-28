<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Study extends Model
{
    use Searchable;
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
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
        array_push($array, $this->type()->toArray());
        array_push($array, $this->level()->toArray());
        array_push($array, $this->section->toArray());
        array_push($array, $this->school->toArray());

        return $array;
    }
}
