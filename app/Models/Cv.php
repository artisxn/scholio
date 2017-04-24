<?php

namespace App\Models;

use App\Models\Admission;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function updateIfNotExist(Admission $admission)
    {
        $this->father_name == null ? $this->father_name = $admission->father_name : $this->father_name;
        $this->father_email == null ? $this->father_email = $admission->father_email : $this->father_email;
        $this->father_phone == null ? $this->father_phone = $admission->father_phone : $this->father_phone;
        $this->father_city == null ? $this->father_city = $admission->father_city : $this->father_city;
        $this->father_post_code == null ? $this->father_post_code = $admission->father_post_code : $this->father_post_code;
        $this->father_job == null ? $this->father_job = $admission->father_job : $this->father_job;
        $this->father_company == null ? $this->father_company = $admission->father_company : $this->father_company;
        $this->father_vat == null ? $this->father_vat = $admission->father_vat : $this->father_vat;
        $this->father_income == null ? $this->father_income = $admission->father_income : $this->father_income;
        $this->father_id_number == null ? $this->father_id_number = $admission->father_id_number : $this->father_id_number;
        $this->mother_name == null ? $this->mother_name = $admission->mother_name : $this->mother_name;
        $this->mother_email == null ? $this->mother_email = $admission->mother_email : $this->mother_email;
        $this->mother_phone == null ? $this->mother_phone = $admission->mother_phone : $this->mother_phone;
        $this->mother_city == null ? $this->mother_city = $admission->mother_city : $this->mother_city;
        $this->mother_post_code == null ? $this->mother_post_code = $admission->mother_post_code : $this->mother_post_code;
        $this->mother_job == null ? $this->mother_job = $admission->mother_job : $this->mother_job;
        $this->mother_company == null ? $this->mother_company = $admission->mother_company : $this->mother_company;
        $this->mother_vat == null ? $this->mother_vat = $admission->mother_vat : $this->mother_vat;
        $this->mother_income == null ? $this->mother_income = $admission->mother_income : $this->mother_income;
        $this->mother_id_number == null ? $this->mother_id_number = $admission->mother_id_number : $this->mother_id_number;
        $this->guardian_name == null ? $this->guardian_name = $admission->guardian_name : $this->guardian_name;
        $this->guardian_email == null ? $this->guardian_email = $admission->guardian_email : $this->guardian_email;
        $this->guardian_phone == null ? $this->guardian_phone = $admission->guardian_phone : $this->guardian_phone;
        $this->guardian_city == null ? $this->guardian_city = $admission->guardian_city : $this->guardian_city;
        $this->guardian_post_code == null ? $this->guardian_post_code = $admission->guardian_post_code : $this->guardian_post_code;
        $this->guardian_job == null ? $this->guardian_job = $admission->guardian_job : $this->guardian_job;
        $this->guardian_company == null ? $this->guardian_company = $admission->guardian_company : $this->guardian_company;
        $this->guardian_vat == null ? $this->guardian_vat = $admission->guardian_vat : $this->guardian_vat;
        $this->guardian_income == null ? $this->guardian_income = $admission->guardian_income : $this->guardian_income;
        $this->guardian_id_number == null ? $this->guardian_id_number = $admission->guardian_id_number : $this->guardian_id_number;
        $this->id_number == null ? $this->id_number = $admission->id_number : $this->id_number;
        $this->post_code == null ? $this->post_code = $admission->post_code : $this->post_code;
        $this->religion == null ? $this->religion = $admission->religion : $this->religion;
        $this->place_of_birth == null ? $this->place_of_birth = $admission->place_of_birth : $this->place_of_birth;
        $this->student_relatives == null ? $this->student_relatives = $admission->student_relatives : $this->student_relatives;
        $this->school_grades == null ? $this->school_grades = $admission->school_grades : $this->school_grades;
        $this->previous_school == null ? $this->previous_school = $admission->previous_school : $this->previous_school;
        $this->polyteknos == null ? $this->polyteknos = $admission->polyteknos : $this->polyteknos;
        $this->studies == null ? $this->studies = $admission->studies : $this->studies;
        $this->about == null ? $this->about = $admission->about : $this->about;
        $this->skills == null ? $this->skills = $admission->skills : $this->skills;
        $this->languages == null ? $this->languages = $admission->languages : $this->languages;
        $this->certifications == null ? $this->certifications = $admission->certifications : $this->certifications;
        $this->awards == null ? $this->awards = $admission->awards : $this->awards;
        $this->other_interests == null ? $this->other_interests = $admission->other_interests : $this->other_interests;

        $this->save();
    }
}
