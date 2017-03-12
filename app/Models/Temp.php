<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{

    protected $fillable = ['name', 'value'];
    /**
     * Scope a query to only include users of a given type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNamed($query, $name)
    {
        return $query->where('name', $name);
    }

}
