<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinglePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_tr');
            $table->text('title_eng')->nullable();
            $table->longText('description_tr')->nullable();
            $table->longText('description_eng')->nullable();
            $table->bigInteger('single_menu_id')->unsigned()->nullable();
            $table->bigInteger('article_id')->unsigned()->nullable();
            $table->string('photo_path')->nullable();
            $table->string('embed_video_path',500)->nullable();
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
        Schema::dropIfExists('single_posts');
    }
}
