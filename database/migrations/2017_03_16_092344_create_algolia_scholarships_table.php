<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgoliaScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algolia_scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('study')->nullable();
            $table->string('section')->nullable();
            $table->string('level')->nullable();
            $table->string('criteria')->nullable();
            $table->string('school')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('algolia_scholarships');
    }
}
