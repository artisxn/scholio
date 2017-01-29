<?php
namespace App\Traits;

trait UserScopes
{
    /**
     *  Scope a query to only include Students.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function scopeStudent($query)
    {
        return $query->where('role', 'student')->get();
    }

    /**
     *  Scope a query to only include Parents.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function scopeParent($query)
    {
        return $query->where('role', 'parent')->get();
    }

    /**
     *  Scope a query to only include Teachers.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function scopeTeacher($query)
    {
        return $query->where('role', 'teacher')->get();
    }
}
