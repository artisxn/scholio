<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->index();

            // For Public Profile
            $table->boolean('social')->default(1);
            $table->boolean('map')->default(1);
            $table->boolean('about')->default(1);
            $table->boolean('studies')->default(1);
            $table->boolean('scholarships')->default(1);
            $table->boolean('reviews')->default(1);
            $table->boolean('teachers')->default(1);
            $table->boolean('statistics')->default(1);
            $table->boolean('info')->default(1);

            // For Scholarship Admissions
            $table->boolean('student_address')->default(1);
            $table->boolean('student_city')->default(1);
            $table->boolean('student_phone')->default(0);
            $table->boolean('student_id_number')->default(0);
            $table->boolean('student_tk')->default(0);
            $table->boolean('student_nationality')->default(0);
            $table->boolean('student_religion')->default(0);
            $table->boolean('student_dob')->default(0);
            $table->boolean('student_pob')->default(0);
            $table->boolean('student_polyteknos')->default(0);
            $table->boolean('student_relatives')->default(0);
            $table->boolean('student_previous')->default(0);
            $table->boolean('student_grades')->default(0);

            $table->boolean('mother_fullname')->default(1);
            $table->boolean('mother_phone')->default(1);
            $table->boolean('mother_email')->default(1);
            $table->boolean('mother_address')->default(1);
            $table->boolean('mother_tk')->default(0);
            $table->boolean('mother_job')->default(0);
            $table->boolean('mother_company')->default(0);
            $table->boolean('mother_afm')->default(0);
            $table->boolean('mother_income')->default(0);
            $table->boolean('mother_id_number')->default(0);

            $table->boolean('father_fullname')->default(1);
            $table->boolean('father_phone')->default(1);
            $table->boolean('father_email')->default(1);
            $table->boolean('father_address')->default(1);
            $table->boolean('father_tk')->default(0);
            $table->boolean('father_job')->default(0);
            $table->boolean('father_company')->default(0);
            $table->boolean('father_afm')->default(0);
            $table->boolean('father_income')->default(0);
            $table->boolean('father_id_number')->default(0);

            $table->boolean('guardian_fullname')->default(1);
            $table->boolean('guardian_phone')->default(1);
            $table->boolean('guardian_email')->default(1);
            $table->boolean('guardian_address')->default(1);
            $table->boolean('guardian_tk')->default(0);
            $table->boolean('guardian_job')->default(0);
            $table->boolean('guardian_company')->default(0);
            $table->boolean('guardian_afm')->default(0);
            $table->boolean('guardian_income')->default(0);
            $table->boolean('guardian_id_number')->default(0);

            $table->boolean('skills')->default(1);
            $table->boolean('languages')->default(1);
            $table->boolean('previous_school')->default(1);
            $table->boolean('certifications')->default(1);
            $table->boolean('awards')->default(1);
            $table->boolean('other_interests')->default(1);
            $table->boolean('notes')->default(1);
            $table->boolean('strongpoints')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_settings');
    }
}
