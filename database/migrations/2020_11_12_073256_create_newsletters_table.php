<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->mediumText('title')->nullable();
            $table->mediumText('summary')->nullable();
            $table->LongText('description')->nullable();
            $table->LongText('file')->nullable();
            $table->mediumText('image');
            $table->string('slug');
            $table->string('status');
            $table->string('seo_title');
            $table->mediumText('seo_description');
            $table->mediumText('seo_keyword');
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
        Schema::dropIfExists('newsletters');
    }
}
