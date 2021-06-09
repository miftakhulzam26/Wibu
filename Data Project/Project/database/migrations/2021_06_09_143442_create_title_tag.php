<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_tag', function (Blueprint $table) {
            $table->bigInteger('title_id')->unsigned();
            $table->foreign('title_id')->references('title_id')->on('title');
            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('tag_id')->references('tag_id')->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('title_tag');
    }
}
