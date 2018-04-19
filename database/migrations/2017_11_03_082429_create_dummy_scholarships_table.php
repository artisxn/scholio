<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy_scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scholarship_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->string('financial_plan');
            $table->string('financial_icon');
            $table->string('financial_metric');
            $table->integer('financial_amount');
            $table->string('study_name')->nullable();
            $table->string('level_name');
            $table->string('criteria_name');
            $table->string('criteria_icon')->nullable();
            $table->string('section_icon')->nullable();
            $table->boolean('active')->default(0);
            $table->date('end_at');
            $table->integer('admissions_length');
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dummy_scholarships');
    }
}
