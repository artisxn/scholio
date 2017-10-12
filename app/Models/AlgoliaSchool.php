<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlgoliaSchool extends Model
{
    // use \Laravel\Scout\Searchable;

    public $timestamps = false;

    public function searchableAs()
    {
        return 'dummySchools';
    }
}
