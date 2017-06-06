<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlgoliaStudy extends Model
{
    // use \Laravel\Scout\Searchable;

    public $timestamps = false;

    public function searchableAs()
    {
        return 'dummyStudies';
    }
}
