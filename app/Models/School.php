<?php

namespace App\Models;

use App\Models\Dummy;
use App\Models\Image;
use App\Models\Review;
use App\Models\Scholarship;
use App\Models\SchoolTypes;
use App\Models\Study;
use App\User;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    // use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo_id',
        'type_id',
        'name',
        'website',
        'city',
        'address',
        'phone',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'approved', 'created_at', 'updated_at',
    ];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'schools';
    }

    /**
     *  Gets the type of the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(SchoolTypes::class, 'type_id');
    }

    /**
     *  Attaches the Image of the School to the pivot table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function image()
    {
        return $this->belongsToMany(Image::class, 'image_school')->withTimestamps();
    }

    /**
     *  Gets all the scholarships of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scholarship()
    {
        return $this->hasMany(Scholarship::class);
    }

    /**
     *  Gets the length of all scholarships created by this school
     *
     * @return int
     */
    public function lengthScholarships()
    {
        return $this->scholarship()->count();
    }

    /**
     *  Gets the user admin of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     *  Gets all the users connected to the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'school_user');
    }

    /**
     *  Gets all the teachers connected to the school
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function teachers()
    {
        return $this->users()->where('role', 'teacher');
    }

    /**
     *  Gets the length of all teachers are connected with this school
     *
     * @return int
     */
    public function lengthTeachers()
    {
        return $this->teachers()->count();
    }

    /**
     *  Gets all the students connected to the school
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function students()
    {
        return $this->users()->where('role', 'student');
    }

    /**
     *  Gets the length of all students are connected with this school
     *
     * @return int
     */
    public function lengthStudents()
    {
        return $this->students()->count();
    }

    /**
     *  Gets all the studies of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function study()
    {
        return $this->belongsToMany(Study::class, 'school_study');
    }

    /**
     *  Gets the length of all studies this school offers
     *
     * @return int
     */
    public function lengthStudies()
    {
        return $this->study()->count();
    }

    public function email()
    {
        return $this->admin->email;
    }

    public function name()
    {
        return $this->admin->name;
    }

    public function profileImage()
    {
        $img = Image::find($this->background);
        if ($img) {
            return $img->path;
        }
        return;
        // return $this->image()->pluck('path')->first();
    }

    public function dummy()
    {
        return $this->hasOne(Dummy::class);
    }

    public function settings()
    {
        return $this->hasOne(SchoolSetting::class, 'school_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function countReviews()
    {
        return count($this->reviews);
    }

    public function averageStars()
    {
        $total = 0;
        $count = 0;
        foreach ($this->reviews as $review) {
            foreach ($review->allCategories() as $cat) {
                $total += $cat->stars;
                $count++;
            }
        }

        return ($count != 0) ? ($total / $count) : 0;
    }

    public function averageReviews()
    {
        $count = [];
        $reviews = [];

        foreach ($this->reviews as $v => $review) {
            foreach ($review->category as $value => $category) {
                if ($this->reviews->first() == $review) {
                    $count[$value] = $category->stars;
                } else {
                    $count[$value] += $category->stars;
                }

                if ($this->reviews->last() == $review) {
                    $count[$value] /= count($this->reviews);
                }
            }
        }

        if ($reviews) {
            foreach ($this->categories() as $value => $cat) {
                $reviews[$value] = ['name' => $cat->name, 'stars' => $count[$value]];
                // $reviews['stars'] = $count[$value];
                // $reviews-> = $cat->name;
                // $reviews[$cat->name] = $count[$value];
            }
        }

        return collect($reviews);
    }

    public function categories()
    {
        return $this->type->review_categories;
    }
}
