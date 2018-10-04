<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DummyLevelsData extends Model
{
    
    /**
     *  Gets the user admin of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }
}
