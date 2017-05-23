<?php

namespace App\Models;

use App\Models\Criteria;
use App\Models\Financial;
use App\Models\Level;
use App\Models\School;
use App\Models\Study;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
    // use Searchable;
    use SoftDeletes;
    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'scholarships';
    }
    /**
     *  Gets the school which created this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    /**
     *  Gets the financial plan of this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function financial()
    {
        return $this->belongsTo(Financial::class);
    }

    /**
     *  Gets the financial plan of this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }

    /**
     *  Gets the level which is assosiated with this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /**
     *  Gets the study which is assosiated with this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    /**
     *  Gets the user which created this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(User::class, 'scholarship_user')->withTimestamps();
    }

    /**
     *  Gets the length
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function usersLength()
    {
        return $this->user()->count();
    }

    public function interested()
    {
        return $this->belongsToMany(User::class, 'interested')->withTimestamps();
    }

    /**
     *  Gets the length
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function interestsLength()
    {
        return $this->interested()->count();
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
        array_push($array, $this->study->toArray());
        array_push($array, $this->level->toArray());
        array_push($array, $this->school->toArray());
        array_push($array, $this->criteria->toArray());
        array_push($array, $this->criteria->toArray());

        return $array;
    }

    public function admission()
    {
        return $this->hasMany(Admission::class);
    }
}
