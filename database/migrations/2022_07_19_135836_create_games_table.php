<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('slug');
            $table->string('name');
            $table->date('released');
            $table->string('background_image');
            $table->float('rating');
            $table->float('rating_top');
            $table->integer('ratings_count');
            $table->integer('reviews_text_count');
            $table->integer('added');
            $table->integer('metacritic');
            $table->integer('playtime');
            $table->integer('suggestions_count');
            $table->string('updated');
            $table->integer('reviews_count');
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
        Schema::dropIfExists('games');
    }
};
