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
            $table->integer('school_id');
            $table->integer('teacher_id');
            $table->string('title');
            $table->text('studies')->nullable(); // comma seperated values
            $table->text('sections')->nullable(); // comma seperated values
            $table->integer('level_id')->nullable();
            $table->double('hpw')->nullable();; // Hours per week
            // Maybe! add the time and date of the class
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('lectures');
    }
}
