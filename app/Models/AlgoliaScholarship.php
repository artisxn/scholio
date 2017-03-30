<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class AlgoliaScholarship extends Model
{
    use Searchable;

    public $timestamps = false;

    public function searchableAs()
    {
        return 'dummyScholarships';
    }
}
