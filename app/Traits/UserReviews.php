<?php

namespace App\Traits;

trait UserReviews
{
    /**
     * Check if the current user has reviewed the given school
     *
     * @param School $school
     * @return boolean
     */
    public function reviewedSchool($school)
    {
        if ($this->reviews->contains('school_id', $school->id)) {
            return true;
        }

        return false;
    }
}
