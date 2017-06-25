<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlgoliaScholarship extends Model
{
    // use \Laravel\Scout\Searchable;

    public $timestamps = false;

    public function searchableAs()
    {
        return 'dummyScholarships';
    }
}
