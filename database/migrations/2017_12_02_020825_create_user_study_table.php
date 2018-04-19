<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStudyTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('study_user', function (Blueprint $table) {
            $table->primary(['user_id', 'study_id', 'school_id']);
            $table->integer('study_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('school_id')->unsigned();
            // $table->string('status')->default('connected');
            // $table->string('type')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');
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
        Schema::dropIfExists('study_user');
    }
}
