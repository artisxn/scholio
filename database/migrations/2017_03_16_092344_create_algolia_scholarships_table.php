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
            $table->integer('scholarship_id');
            $table->string('study')->nullable();
            $table->string('type')->nullable();
            $table->string('type_en')->nullable();
            $table->string('section')->nullable();
            $table->string('section_en')->nullable();
            $table->string('level')->nullable();
            $table->string('level_en')->nullable();
            $table->string('criteria')->nullable();
            $table->string('criteria_en')->nullable();
            $table->string('school')->nullable();
            $table->integer('school_id')->nullable();
            $table->string('school_logo')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('financial_plan')->nullable();
            $table->string('financial_plan_en')->nullable();
            $table->integer('financial_amount')->nullable();
            $table->string('financial_metric')->nullable();
            $table->string('financial_icon')->nullable();
            $table->integer('requested')->nullable();
            $table->integer('interested')->nullable();
            $table->string('exams')->nullable();
            $table->string('exams_en')->nullable();
            $table->string('end_at')->nullable();
            $table->text('tags')->nullable();
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
