<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Level;
use App\Models\School;
use App\Models\Study;
use Illuminate\Database\Eloquent\Model;

class SchoolTypes extends Model
{
    /**
     *  Gets all the Schools in this type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schools()
    {
        return $this->hasMany(School::class, 'type_id');
    }

    /**
     *  Gets all the Studies of this type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function study()
    {
        return $this->hasMany(Study::class);
    }

    /**
     *  Gets all the Study Levels of this type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function level()
    {
        return $this->hasMany(Level::class);
    }

    public function levelEN()
    {
        return $this->hasMany(LevelEN::class);
    }

    public function review_categories()
    {
        return $this->hasMany(Category::class, 'type_id');
    }
}
