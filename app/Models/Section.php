<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Study;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    // use Searchable;
    /**
     *  Gets all the levels of this section
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /**
     *  Gets all the studies of this section
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function study()
    {
        return $this->belongsToMany(Study::class, 'section_study')->withTimestamps();
    }
}
