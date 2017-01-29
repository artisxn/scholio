<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Study;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * @return mixed
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function study()
    {
        return $this->belongsToMany(Study::class, 'section_study')->withTimestamps();
    }
}
