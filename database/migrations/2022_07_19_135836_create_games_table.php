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
            $table->string('slug')->nullable();;
            $table->string('name')->nullable();;
            $table->date('released')->nullable();;
            $table->string('background_image')->nullable();;
            $table->float('rating')->nullable();;
            $table->float('rating_top')->nullable();;
            $table->integer('ratings_count');
            $table->integer('reviews_text_count')->nullable();;
            $table->integer('added')->nullable();;
            $table->integer('metacritic')->nullable();
            $table->integer('playtime')->nullable();;
            $table->integer('suggestions_count')->nullable();;
            $table->string('updated')->nullable();;
            $table->integer('reviews_count')->nullable();;
            $table->integer('from_api_page')->nullable();;
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
