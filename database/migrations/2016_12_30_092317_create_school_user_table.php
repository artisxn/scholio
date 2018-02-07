<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_user', function (Blueprint $table) {
            $table->primary(['school_id', 'user_id']);
            $table->integer('school_id')->index();
            $table->integer('user_id')->index();
            $table->string('status')->default('connected');
            $table->integer('study_id')->nullable();
            $table->string('type')->nullable();
            $table->string('level')->nullable();
            $table->integer('study_id2')->nullable();
            $table->string('type2')->nullable();
            $table->string('level2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_user');
    }
}
