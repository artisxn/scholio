<?php

namespace App\Models;

use App\Models\SchoolTypes;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    /**
     *  Gets the school type which is assosiated with this level
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(SchoolTypes::class, 'school_type_id');
    }

    /**
     *  Gets the section which is assosiated with this level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function section()
    {
        return $this->hasMany(Section::class);
    }
}
