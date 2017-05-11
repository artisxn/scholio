<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->primary(['scholarship_id', 'user_id']);
            $table->integer('user_id')->index();
            $table->integer('scholarship_id')->index();

            $table->string('father_name')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_city')->nullable();
            $table->string('father_post_code')->nullable();
            $table->string('father_job')->nullable();
            $table->string('father_company')->nullable();
            $table->string('father_vat')->nullable();
            $table->string('father_income')->nullable();
            $table->string('father_id_number')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_city')->nullable();
            $table->string('mother_post_code')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_company')->nullable();
            $table->string('mother_vat')->nullable();
            $table->string('mother_income')->nullable();
            $table->string('mother_id_number')->nullable();

            $table->string('guardian_name')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_city')->nullable();
            $table->string('guardian_post_code')->nullable();
            $table->string('guardian_job')->nullable();
            $table->string('guardian_company')->nullable();
            $table->string('guardian_vat')->nullable();
            $table->string('guardian_income')->nullable();
            $table->string('guardian_id_number')->nullable();

            $table->string('id_number')->nullable();
            $table->string('post_code')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->text('student_relatives')->nullable();

            $table->text('school_grades')->nullable();
            $table->text('previous_school')->nullable();
            $table->text('polyteknos')->nullable();

            $table->text('skills')->nullable();
            $table->text('languages')->nullable();
            $table->text('certifications')->nullable();
            $table->text('awards')->nullable();
            $table->text('other_interests')->nullable();
            $table->text('aboutMe')->nullable();

            $table->text('notes')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}