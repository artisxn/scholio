<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgoliaSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algolia_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->string('name')->nullabale();
            $table->string('type')->nullabale();
            $table->integer('type_id')->nullabale();
            $table->text('study')->nullabale();
            $table->string('address')->nullabale();
            $table->string('city')->nullabale();
            $table->string('username')->nullabale();
            $table->string('logo')->nullabale();
            $table->string('image')->nullabale();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->integer('lengthStudents')->nullable();
            $table->integer('lengthTeachers')->nullable();
            $table->integer('lengthStudies')->nullable();
            $table->integer('lengthScholarships')->nullable();
            $table->float('stars', 2, 1)->nullable();
            $table->integer('reviews')->nullable();
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
        Schema::dropIfExists('algolia_schools');
    }
}
