<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id('review_id');
            $table->bigInteger('title_id')->unsigned();
            $table->bigInteger('creator_id')->unsigned();
            $table->foreign('title_id')->references('id')->on('title');
            $table->foreign('creator_id')->references('creator_id')->on('creator');
            $table->string('content')->nullable()->default('text');
            $table->integer('rate');
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
        Schema::dropIfExists('review');
    }
}
