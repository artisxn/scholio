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
            $table->boolean('social')->default(1);
            $table->boolean('map')->default(1);
            $table->boolean('about')->default(1);
            $table->boolean('studies')->default(1);
            $table->boolean('scholarships')->default(1);
            $table->boolean('reviews')->default(1);
            $table->boolean('teachers')->default(1);
            $table->boolean('statistics')->default(1);
            $table->boolean('info')->default(1);
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
