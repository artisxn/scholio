<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgeStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badge_student', function (Blueprint $table) {
            $table->primary(['badge_id', 'student_id', 'lecture_id']);
            $table->integer('badge_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('lecture_id')->unsigned();
            $table->timestamps();

            $table->foreign('badge_id')->references('id')->on('badges')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('badge_student');
    }
}
