<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            // $table->bigInteger('phone')->nullable();
            // $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            // $table->string('address')->nullable();
            // $table->string('city')->nullable();
            // $table->string('lat')->nullable();
            // $table->string('lng')->nullable();
            $table->string('status')->default('guest');
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
        Schema::dropIfExists('students');
    }
}
