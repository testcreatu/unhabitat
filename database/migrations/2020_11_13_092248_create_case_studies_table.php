<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('altimage');
            $table->LONGTEXT('description');
            $table->LONGTEXT('summary');
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
        Schema::dropIfExists('case_studies');
    }
}
