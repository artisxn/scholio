<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('student_address')->nullable();
            $table->string('student_phone')->nullable();
            $table->string('student_id_number')->nullable();
            $table->string('student_tk')->nullable();
            $table->string('student_nationality')->nullable();
            $table->string('student_religion')->nullable();
            $table->string('student_dob')->nullable();
            $table->string('student_pob')->nullable();
            $table->string('student_polyteknos')->nullable();
            $table->string('student_relatives')->nullable();
            $table->string('student_previous')->nullable();
            $table->string('student_grades')->nullable();
            $table->string('mother_fullname')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('mother_tk')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_company')->nullable();
            $table->string('mother_afm')->nullable();
            $table->string('mother_income')->nullable();
            $table->string('mother_id_number')->nullable();
            $table->string('father_fullname')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_address')->nullable();
            $table->string('father_tk')->nullable();
            $table->string('father_job')->nullable();
            $table->string('father_company')->nullable();
            $table->string('father_afm')->nullable();
            $table->string('father_income')->nullable();
            $table->string('father_id_number')->nullable();
            $table->string('guardian_fullname')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_tk')->nullable();
            $table->string('guardian_job')->nullable();
            $table->string('guardian_company')->nullable();
            $table->string('guardian_afm')->nullable();
            $table->string('guardian_income')->nullable();
            $table->string('guardian_id_number')->nullable();
            $table->text('skills')->nullable();
            $table->text('languages')->nullable();
            $table->text('previous_school')->nullable();
            $table->text('certifications')->nullable();
            $table->text('awards')->nullable();
            $table->text('other_interests')->nullable();
            $table->text('notes')->nullable();
            $table->text('strongpoints')->nullable();
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
        Schema::dropIfExists('cvs');
    }
}
