<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionField extends Model
{
    public function category()
    {
        return $this->belongsTo(AdmissionCategory::class, 'category_id');
    }
}
