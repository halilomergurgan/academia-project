<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_tr');
            $table->text('title_eng');
            $table->longText('description_tr');
            $table->longText('description_eng');
            $table->bigInteger('menu_id')->unsigned();
            $table->bigInteger('submenu_id')->unsigned();
            $table->string('photo_path')->nullable();
            $table->string('embed_video_path')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
