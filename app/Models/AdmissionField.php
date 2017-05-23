<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionField extends Model
{
    public function category()
    {
        return $this->belongsTo(AdmissionCategory::class, 'category_id');
    }

    public function scopeFindWithSlug($query, $slug)
    {
        return $query->where('slug', $slug)->get();
    }

    public function field()
    {
        return $this->belongsToMany(Admission::class, 'admission_field');
    }
}
