<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

class Company extends Model
{
    /**
    * @return 
    */
    public function work()
    {
        return $this->has_many(Work::class);
    }
}
