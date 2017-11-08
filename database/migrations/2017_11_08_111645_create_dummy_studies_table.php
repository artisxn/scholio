<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->index();
            $table->integer('level_id')->index();
            $table->integer('section_id')->index();
            $table->integer('study_id')->index();
            $table->string('level_name');
            $table->string('section_name');
            $table->string('study_name');
            $table->string('section_icon')->nullable();
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
        Schema::dropIfExists('dummy_studies');
    }
}
