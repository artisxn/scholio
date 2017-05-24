<?php

namespace App\Models;

use App\Models\AdmissionField;
use App\Models\Scholarship;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
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
}
