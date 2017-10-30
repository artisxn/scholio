<?php

namespace App\Models;

use App\Models\SchoolTypesEN;
use App\Models\SectionEN;
use Illuminate\Database\Eloquent\Model;

class LevelEN extends Model
{
    /**
     *  Gets the school type which is assosiated with this level
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(SchoolTypesEN::class, 'school_types_id');
    }

    /**
     *  Gets the section which is assosiated with this level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function section()
    {
        return $this->hasMany(SectionEN::class, 'id');
    }
}
