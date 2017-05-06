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
            $table->boolean('parents_basic')->default(1); // Father-Mother: name, city, email, phone, post_code
            $table->boolean('guardian_basic')->default(1); // Guardian: name, city, email, phone, post_code
            $table->boolean('parents_job')->default(1); // Father-Mother: job, company, vat, income, id (taftotita)
            $table->boolean('guardians_job')->default(1); // Guardian: job, company, vat, income, id (taftotita)
            $table->boolean('id_number')->default(1);
            $table->boolean('post_code')->default(1);
            $table->boolean('religion')->default(1);
            $table->boolean('nationality')->default(1);
            $table->boolean('place_of_birth')->default(1);
            $table->boolean('student_relatives')->default(1);
            $table->boolean('school_grades')->default(1);
            $table->boolean('previous_school')->default(1);
            $table->boolean('polyteknos')->default(1);
            $table->boolean('skills')->default(1);
            $table->boolean('languages')->default(1);
            $table->boolean('certifications')->default(1);
            $table->boolean('awards')->default(1);
            $table->boolean('other_interests')->default(1);
            $table->boolean('aboutMe')->default(1);
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
