<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_tr');
            $table->string('slug');
            $table->text('title_eng')->nullable();
            $table->longText('description_tr');
            $table->longText('description_eng')->nullable();
            $table->longText('external_link')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('embed_video_path',500)->nullable();

            $table->unique(['title_tr', 'slug'], 'articles_unique');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
