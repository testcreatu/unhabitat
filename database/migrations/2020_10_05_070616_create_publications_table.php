<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
         $table->increments('id');
         $table->string('category_id');
         $table->string('title');
         $table->string('publisher_name');
         $table->string('slug');
         $table->string('image');
         $table->string('altimage');
         $table->LONGTEXT('description');
         $table->LONGTEXT('summary');
         $table->string('creation_date')->nullable();
         $table->string('seo_title');
         $table->string('seo_keyword');
         $table->string('seo_description');
         $table->string('show_in_homepage')->nullable();
         $table->string('pages')->nullable();
         $table->string('year');
         $table->string('file');
         $table->string('status');
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
        Schema::dropIfExists('publications');
    }
}
