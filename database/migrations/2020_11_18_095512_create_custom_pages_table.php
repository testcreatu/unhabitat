<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_pages', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->mediumText('title');
            $table->mediumText('summary')->nullable();
            $table->LongText('description');
            $table->LongText('file')->nullable();
            $table->string('slug');
            $table->string('status');
            $table->string('page_for')->nullable();
            $table->string('seo_title')->nullable();
            $table->mediumText('seo_description')->nullable();
            $table->mediumText('seo_keyword')->nullable();
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
        Schema::dropIfExists('custom_pages');
    }
}
