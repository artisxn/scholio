<?php

namespace App\Traits;

use App\Models\Scholarship;

trait UserAdmissions
{
    /**
     * Check if the current user is have admitted to the given scholarship
     *
     * @param Scholarship $scholarship
     * @return boolean
     */
    public function checkAdmission(Scholarship $scholarship)
    {
        $check = false;
        foreach ($this->admissions as $admission) {
            if ($admission->scholarship_id == $scholarship->id) {
                $check = true;
                break;
            }
        }

        return $check;
    }

    /**
     * Returns the admission id of the current user for the given scholarship
     *
     * @param Scholarship $scholarship
     * @return int
     */
    public function getAdmissionId(Scholarship $scholarship)
    {
        $id = 0;
        foreach ($this->admissions as $admission) {
            if ($admission->scholarship_id == $scholarship->id) {
                $id = $admission->id;
                break;
            }
        }

        return $id;
    }
}
