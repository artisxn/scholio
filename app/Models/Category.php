<?php

namespace App\Models;

use App\Models\CategoryReview;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function review()
    {
        return $this->hasMany(CategoryReview::class, 'category_id');
    }
}
