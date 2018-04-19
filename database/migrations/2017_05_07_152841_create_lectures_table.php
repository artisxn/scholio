<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->string('title');
            $table->text('studies')->nullable(); // comma seperated values
            $table->text('sections')->nullable(); // comma seperated values
            $table->integer('level_id')->nullable();
            $table->double('hpw')->nullable();; // Hours per week
            // Maybe! add the time and date of the class
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
