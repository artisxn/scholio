<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlgoliaStudy extends Model
{
    use \Laravel\Scout\Searchable;
<<<<<<< HEAD

=======
>>>>>>> 7a1c36f76a7fc4b4f257f8fd8c1cf1629efc0070
    public $timestamps = false;

    public function searchableAs()
    {
        return 'dummyStudies';
    }
}
