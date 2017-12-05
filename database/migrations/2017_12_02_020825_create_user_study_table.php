<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStudyTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('study_user', function (Blueprint $table) {
            $table->primary(['user_id', 'study_id', 'school_id']);
            $table->integer('study_id')->index();
            $table->integer('user_id')->index();
            $table->integer('school_id')->index();
            // $table->string('status')->default('connected');
            // $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_user');
    }
}
