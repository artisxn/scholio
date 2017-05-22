<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionCategory extends Model
{
    public function fields()
    {
        return $this->hasMany(AdmissionField::class, 'category_id');
    }
}
