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
            $table->string('name')->nullabale();
            $table->string('type')->nullabale();
            $table->text('study')->nullabale();
            // $table->text('scholarship')->nullabale();
            $table->string('address')->nullabale();
            $table->string('city')->nullabale();
            $table->text('_geoloc')->nullabale();
            $table->string('username')->nullabale();
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
