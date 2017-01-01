<?php

namespace App\Models;

use App\Models\Criteria;
use App\Models\CriteriaEn;
use App\Models\Financial;
use App\Models\Level;
use App\Models\School;
use App\Models\Study;
use App\Models\Tag;
use App\User;
use Carbon\Carbon;
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
        if (request()->cookie('lang') == 'en') {
            return $this->belongsTo(FinancialEn::class, 'financial_id');
        }
        return $this->belongsTo(Financial::class, 'financial_id');
    }

    public function financialEN()
    {
        return $this->belongsTo(FinancialEn::class, 'financial_id');
    }

    /**
     *  Gets the financial plan of this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function criteria()
    {
        if (request()->cookie('lang') == 'en') {
            return $this->belongsTo(CriteriaEn::class, 'criteria_id');
        }
        return $this->belongsTo(Criteria::class, 'criteria_id');
    }

    public function criteriaEN()
    {
        return $this->belongsTo(CriteriaEn::class, 'criteria_id');
    }

    /**
     *  Gets the level which is assosiated with this scholarship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        if (request()->cookie('lang') == 'en') {
            return $this->belongsTo(LevelEn::class, 'criteria_id');
        }
        return $this->belongsTo(Level::class, 'criteria_id');
    }

    public function levelEN()
    {
        return $this->belongsTo(LevelEn::class, 'criteria_id');
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

    public function scopeActiveScholarships($query)
    {
        return $query->where('active', 1)->get();
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'scholarship_tag');
    }

    public function multipleStudies()
    {
         return $this->belongsToMany(Study::class, 'scholarship_study');   
    }

     public function scopeActive($query)
    {
        return $query->where('active', 1)->get();
    }

    public function end()
    {
        dd(request());
        $this->end_at = Carbon::now();
        $this->active = 0;
        $this->save();
        $alg = AlgoliaScholarship::where('scholarship_id', $this->id)->get()->first();
        $alg->delete();
        // WINNERS (create a pivot table 'scholarship_winner' to show multiple winners in one scholarship) 
        // Update statistics (algolia dummy)
        return 'Done';
    }
}
