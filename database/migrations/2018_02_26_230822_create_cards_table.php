<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('student_id')->nullable();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('username')->nullable();
            $table->string('role')->default('student');
            $table->string('status')->default('connected');
            $table->string('type')->nullable();
            $table->string('type2')->nullable();
            $table->string('level2')->nullable();
            $table->string('study_id')->nullable();
            $table->string('study_id2')->nullable();
            $table->string('student_country')->nullable();
            $table->date('student_dob')->nullable();
            $table->string('student_city')->nullable();
            $table->string('student_address')->nullable();
            $table->string('student_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('father_fullname')->nullable();
            $table->string('mother_fullname')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('study')->nullable();
            $table->string('study2')->nullable();
            $table->string('level')->nullable();
            $table->text('grades')->nullable();
            $table->string('avatar')->default('/images/student.png');
            $table->string('guardian_fullname')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('school_number')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
