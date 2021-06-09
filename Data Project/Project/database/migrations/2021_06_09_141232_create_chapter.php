<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->id('chapter_id');
            $table->string('chapter_name');
            $table->text('chapter_text')->default('text');
            $table->timestamps('chapter_date');
            $table->string('chapter_tts');
            $table->integer('chapter_like');
            $table->integer('chapter_read');
            $table->bigInteger('title_id')->unsigned();
            $table->foreign('title_id')->references('title_id')->on('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter');
    }
}
