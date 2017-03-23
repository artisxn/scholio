<?php

namespace App\Models;

use App\Models\CategoryReview;
use App\Models\School;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function allCategories()
    {
        return CategoryReview::where('review_id', $this->id)->get();
    }

    public function category()
    {
        return $this->hasMany(CategoryReview::class, 'category_id');
    }

}
