<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_path');
            $table->string('path');
            $table->string('name');
            $table->string('extension');
            $table->string('alt');
            $table->string('type')->default('Image');
            $table->timestamps();
        });

        Schema::create('image_school', function (Blueprint $table) {
            $table->primary(['image_id', 'school_id']);
            $table->integer('image_id')->index();
            $table->integer('school_id')->index();
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
        Schema::dropIfExists('images');
        Schema::drop('image_school');
    }
}
