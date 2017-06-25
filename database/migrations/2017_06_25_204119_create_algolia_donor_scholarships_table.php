<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlgoliaDonorScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algolia_donor_scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('avatar')->nullable();
            $table->text('study')->nullable();
            $table->text('institution')->nullable();
            $table->string('financial_amount')->nullable();
            $table->text('terms')->nullable();
            $table->integer('requested')->nullable();
            $table->integer('interested')->nullable();
            $table->string('end_at')->nullable();
            $table->text('tags')->nullable();
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
        Schema::dropIfExists('algolia_donor_scholarships');
    }
}
