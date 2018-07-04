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
            $table->integer('school_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->integer('type_id')->nullable();
            $table->text('study')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('username')->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->integer('lengthStudents')->nullable();
            $table->integer('lengthTeachers')->nullable();
            $table->integer('lengthStudies')->nullable();
            $table->integer('lengthScholarships')->nullable();
            $table->text('activeScholarships')->nullable(); // για να περνουμε την λεξη υποτροφια (οταν εχει πάνω απο 0 ενεργες υποτροφιες)
            $table->float('stars', 2, 1)->nullable();
            $table->integer('reviews')->nullable();
            $table->text('tags')->nullable();
            $table->integer('subscription')->nullable();
            $table->integer('scholioranking')->default(100);

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
        Schema::dropIfExists('algolia_schools');
    }
}
