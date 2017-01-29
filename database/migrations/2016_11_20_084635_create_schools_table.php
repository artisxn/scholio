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
            $table->integer('user_id')->index();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('type_id')->unsigned();
            $table->string('address');
            $table->string('city');
            $table->integer('phone');
            $table->string('website')->unique();
            $table->integer('logo_id')->nullable();
            $table->boolean('approved')->default(1);
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
        Schema::dropIfExists('schools');
    }
}
