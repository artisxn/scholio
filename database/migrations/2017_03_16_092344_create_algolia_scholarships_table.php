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
            $table->string('section')->nullable();
            $table->string('level')->nullable();
            $table->string('criteria')->nullable();
            $table->string('school')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('financial_plan')->nullable();
            $table->string('financial_amount')->nullable();
            $table->string('financial_metric')->nullable();
            $table->string('financial_icon')->nullable();
            $table->string('exams')->nullable();
            $table->string('end_at')->nullable();
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
