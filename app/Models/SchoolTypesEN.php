<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolTypesEN extends Model
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
        return $this->hasMany(LevelEN::class, 'school_types_id');
    }

    public function review_categories()
    {
        return $this->hasMany(CategoryEN::class, 'type_id');
    }
}
