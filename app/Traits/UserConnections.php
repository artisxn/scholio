<?php
namespace App\Traits;

use App\Models\School;
use App\User;

trait UserConnections
{

    /**
     * Retrives all the school that the current user is connected with
     *
     * @return School
     */
    public function connectedSchool()
    {
        return $this->belongsToMany(School::class, 'school_user')->withPivot('status', 'type', 'study_id', 'type2', 'study_id2', 'level', 'level2');
    }

    /**
     * Check if the user is connected with the given school
     *
     * @param School $school
     * @return boolean
     */
    public function isConnectedWithSchool($school)
    {
        if ($this->connectedSchool->contains('id', $school->id)) {
            return true;
        }

        return false;
    }

    /**
     * Check if the school is connected with the given user
     *
     * @param User $user
     * @return boolean
     */
    public function checkConnection($user)
    {
        foreach ($this->connectedSchool as $connections) {
            if ($connections->admin->id == $user) {
                return true;
            }
        }
        return false;
    }

    /**
     * Check if the current user belongs to at least one school with the given teacher
     *
     * @param User $teacher
     * @return boolean
     */
    public function studentTeacher($teacher)
    {
        $schools = $this->connectedSchool->pluck('id');

        $teacherSchools = User::find($teacher)->connectedSchool->pluck('id');

        return !empty(array_intersect($schools->toArray(), $teacherSchools->toArray()));

    }
}
