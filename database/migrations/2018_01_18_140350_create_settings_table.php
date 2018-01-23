<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home_img_url');
            $table->string('home_heading');
            $table->string('home_subheading');
            $table->string('about_img_url');
            $table->string('about_heading');
            $table->string('about_subheading');
            $table->string('contact_img_url');
            $table->string('contact_heading');
            $table->string('contact_subheading');
            $table->text('social_links');
            $table->string('copyright_text');
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
        Schema::dropIfExists('settings');
    }
}
