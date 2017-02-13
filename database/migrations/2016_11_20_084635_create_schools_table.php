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
            $table->integer('type_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('website')->unique()->nullable();
            $table->string('logo')->default('http://schooltree.org/static/launch/assets/school_avatar.png');
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
