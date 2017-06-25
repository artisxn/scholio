<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatedScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donated_scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donor_id')->index();
            $table->text('study')->nullable();
            $table->text('institution')->nullable();
            $table->string('financial_amount');
            // $table->string('level');
            $table->text('terms');
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
        Schema::dropIfExists('donated_scholarships');
    }
}
