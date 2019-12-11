<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_tr');
            $table->string('name_eng')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['name_tr']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('single_menus');
    }
}
