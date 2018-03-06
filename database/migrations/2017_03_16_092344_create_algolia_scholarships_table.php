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
            $table->text('study')->nullable();
            $table->string('type')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('section')->nullable();
            $table->string('level')->nullable();
            $table->string('criteria')->nullable();
            $table->integer('criteria_id')->nullable();
            $table->string('school')->nullable();
            $table->integer('school_id')->nullable();
            $table->string('school_logo')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('financial_plan')->nullable();
            $table->integer('financial_plan_id')->nullable();
            $table->integer('financial_amount')->nullable();
            $table->string('financial_metric')->nullable();
            $table->string('financial_icon')->nullable();
            $table->integer('requested')->nullable();
            $table->integer('interested')->nullable();
            $table->string('exams')->nullable();
            $table->string('end_at')->nullable();
            $table->boolean('multiple')->nullable();
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
