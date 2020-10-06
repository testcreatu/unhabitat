<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
           $table->increments('id');
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
           $table->string('is_trending')->nullable();
           $table->string('project_status');
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
        Schema::dropIfExists('projects');
    }
}
