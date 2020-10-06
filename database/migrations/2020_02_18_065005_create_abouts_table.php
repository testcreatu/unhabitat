<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            // $table->string('image');
            // $table->string('altimage');
            $table->LONGTEXT('summary');
            $table->LONGTEXT('description');
            // $table->string('quote')->nullable();
            // $table->mediumText('sub_text')->nullable();
            $table->mediumText('background_image');
            // $table->mediumText('sections')->nullable();
            $table->string('seo_title');
            $table->LONGTEXT('seo_description');
            $table->LONGTEXT('seo_keyword');

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
        Schema::dropIfExists('abouts');
    }
}
