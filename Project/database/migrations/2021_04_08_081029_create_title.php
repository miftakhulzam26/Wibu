<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('cover');
            $table->text('sinopsis');
            $table->bigInteger('favorit')->nullable();
            $table->bigInteger('creator_id')->unsigned();
            $table->timestamps();
            $table->foreign('creator_id')->references('creator_id')->on('creator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('title');
    }
}
