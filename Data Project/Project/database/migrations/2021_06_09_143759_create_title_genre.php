<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_genre', function (Blueprint $table) {
            $table->bigInteger('title_id')->unsigned();
            $table->foreign('title_id')->references('title_id')->on('title');
            $table->bigInteger('genre_id')->unsigned();
            $table->foreign('genre_id')->references('genre_id')->on('tag');
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
        Schema::dropIfExists('title_genre');
    }
}
