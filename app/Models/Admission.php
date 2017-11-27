<?php
//Admission model
namespace App\Models;

use App\Models\AdmissionField;
use App\Models\Scholarship;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        Admission::saving(function ($admission) {
            $scholarship = Scholarship::find($admission->scholarship_id);
            $user = User::find($admission->user_id);
            if ($scholarship->admissions_limit > 0 && $user->info->admissions_limit > 0) {
                parent::boot();
                $scholarship->admissions_limit--;
                $scholarship->save();
                $user->info->admissions_limit--;
                $user->info->save();
            } else {
                return "ERROR";
            }
        });
    }

    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class, 'scholarship_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function fields()
    {
        return $this->belongsToMany(AdmissionField::class, 'admission_field')->withPivot('data');
    }

    public function createWithFields($data)
    {
        foreach (collect($data) as $index => $data) {
            $field = AdmissionField::findWithSlug($index)->first();

            if ($field != null) {
                $this->fields()->save($field, ['data' => $data]);
            }
        }
    }

    public function scopeActive($query)
    {
        $all = [];
        foreach ($query->get() as $q) {
            if ($q->scholarship->active) {
                array_push($all, $q);
            }
        }
        return (collect($all));
    }

    public function categories()
    {
        $allFields = $this->fields;
        $categories = [];
        $tmp = 0;

        foreach ($allFields as $field) {
            if ($tmp != $field->category->id) {
                array_push($categories, $field->category);
            }
            $tmp = $field->category->id;
        }

        return collect($categories);
    }
}
