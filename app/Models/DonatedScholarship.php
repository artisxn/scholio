<?php

namespace App\Models;

use App\Models\Donor;
use Illuminate\Database\Eloquent\Model;

class DonatedScholarship extends Model
{
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
