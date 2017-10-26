<?php

namespace App\Models;

use App\Models\Dummy;
use App\Models\Image;
use App\Models\Review;
use App\Models\Scholarship;
use App\Models\SchoolTypes;
use App\Models\SchoolTypesEn;
use App\Models\Study;
use App\Scholio\Scholio;
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

    public function typeEN()
    {
        return $this->belongsTo(SchoolTypesEn::class, 'type_id');
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
        return $this->users()->where('role', 'student')->withPivot('status');
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

        return (float) (($count != 0) ? (float) ($total / $count) : 0);
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

        if ($count) {
            foreach ($this->categories() as $value => $cat) {
                $reviews[$value] = ['name' => $cat->name, 'stars' => number_format((float) $count[$value], 1, '.', ''), 'icon' => $cat->icon];
            }
        }

        return collect($reviews);
    }

    public function categories()
    {
        return $this->type->review_categories;
    }

    public static function createSchoolAndDummy($user_id, $type_id)
    {
        $school = new self();
        $school->user_id = $user_id;
        $school->type_id = $type_id;
        $school->save();

        Scholio::createSchoolDummy($school);
    }

    public function admissions()
    {
        $result = [];
        foreach ($this->scholarship as $scholarship) {
            foreach ($scholarship->admission as $admission) {
                array_push($result, $admission);
            }
        }

        return collect($result);
    }

    public function admissionsUsers()
    {
        $result = [];
        foreach ($this->scholarship as $scholarship) {
            foreach ($scholarship->admission as $admission) {
                array_push($result, $admission->user);
            }
        }

        return collect($result);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'school_tag');
    }

    public function activeScholarships()
    {
        return $this->scholarship()->where('active', 1)->get();
    }

    public function connected()
    {
        return $this->students()->wherePivot('status', '=', 'connected');
    }

    public function allumni()
    {
        return $this->students()->wherePivot('status', '=', 'allumni');
    }

    public function connectedTeachers()
    {
        return $this->teachers()->wherePivot('status', '=', 'connected');
    }

    public function allumniTeachers()
    {
        return $this->teachers()->wherePivot('status', '=', 'allumni');
    }

    // public function fullAdmission()
    // {
    //     $result = [];
    //     foreach ($this->scholarship as $scholarship) {
    //         foreach ($scholarship->admissions as $index => $admission) {
    //             $p = ['user' => $admission->user->info, 'scholarship' => $admission->scholarship->load('study')];

    //             // $arrayName['user' =>$admission->user->info, '']
    //             array_push($result, $p);
    //         }
    //     }

    //     return collect($result);
    // }

    public function apply()
    {
        return $this->belongsToMany(User::class, 'school_requests');
    }
}
