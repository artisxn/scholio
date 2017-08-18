<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlgoliaDonorScholarship extends Model
{
    // use \Laravel\Scout\Searchable;

    public function searchableAs()
    {
        return 'dummyDonor';
    }
}
