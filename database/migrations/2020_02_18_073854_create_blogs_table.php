<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
           $table->increments('id');
           $table->string('project_id')->nullable();
           $table->string('title');
           $table->string('slug');
           $table->string('image');
           $table->string('altimage');
           $table->LONGTEXT('description');
           $table->LONGTEXT('summary');
           $table->string('creation_date')->nullable();
           $table->string('seo_title');
           $table->string('seo_keyword');
           $table->string('seo_description');
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
        Schema::dropIfExists('blogs');
    }
}
