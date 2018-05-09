<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('country')->nullable();
            $table->string('continent')->nullable();
            $table->string('logo')->default('/upload/school/univ.png');
            $table->integer('background')->unsigned()->nullable();
            $table->text('about')->nullable();
            $table->boolean('approved')->default(0);
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('school_types')->onDelete('cascade');
            // $table->foreign('background')->references('id')->on('images')->onDelete('cascade');
        });

        Schema::create('image_school', function (Blueprint $table) {
            $table->primary(['image_id', 'school_id']);
            $table->integer('image_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->timestamps();

            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
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
        Schema::drop('image_school');
        Schema::dropIfExists('schools');
    }
}
