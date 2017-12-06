<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Job;

class Work extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
    * @return 
    */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
    * @return 
    */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
