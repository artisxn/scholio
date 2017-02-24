<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('github')->nullable();
            $table->string('bitbucket')->nullable();
            $table->string('gitlab')->nullable();
            $table->string('dribbble')->nullable();
            $table->string('tumblr')->nullable();
            $table->string('instagram')->nullable();
            $table->string('Skype')->nullable();
            $table->string('Viber')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('VK')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('telegram')->nullable();
            $table->string('reddit')->nullable();
            $table->string('foursqare')->nullable();
            $table->string('stackOverflow')->nullable();
            $table->string('mySpace')->nullable();
            $table->string('stumbleUpon')->nullable();
            $table->string('youtube')->nullable();
            $table->string('flickr')->nullable();
            $table->string('meetup')->nullable();
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
        Schema::dropIfExists('social_links');
    }
}
