<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgoliaStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algolia_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('school')->nullable();
//            $table->text('type')->nullable();
//            $table->text('city')->nullable();
            $table->string('section')->nullable();
            $table->string('level')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('algolia_studies');
    }
}
