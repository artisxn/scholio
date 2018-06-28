<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->integer('financial_id')->unsigned();
            $table->string('financial_amount');
            $table->integer('study_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('criteria_id')->unsigned();
            $table->date('end_at');
            $table->integer('winners')->default(1);
            $table->text('terms')->nullable();
            $table->boolean('exam')->default(0);
            $table->date('exam_date')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('multiple')->default(0);
            $table->integer('admissions_limit')->default(10000);
            $table->float('price', 10, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('financial_id')->references('id')->on('financials')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');
            $table->foreign('criteria_id')->references('id')->on('criterias')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarships');
    }
}
