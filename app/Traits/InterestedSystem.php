<?php
namespace App\Traits;

use App\Models\Scholarship;

trait InterestedSystem
{
    /**
     *  Gets all the Scholarships that are interested by the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function interested()
    {
        return $this->belongsToMany(Scholarship::class, 'interested')->withTimestamps();
    }

    /**
     *  Gets all the Scholarships that are interested by the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function interestedIn($id)
    {
        foreach ($this->interested as $scholarship) {
            if ($scholarship->id == $id) {
                return true;
            }
        }

        return false;
    }
}
