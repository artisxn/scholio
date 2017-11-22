<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_limits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->index();
            $table->integer('cr1')->default(15);
            $table->integer('cr2')->default(25);
            $table->integer('cr3')->default(10);
            $table->integer('cr4')->default(12);
            $table->integer('cr5')->default(5);
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
        Schema::dropIfExists('scholarship_limits');
    }
}
