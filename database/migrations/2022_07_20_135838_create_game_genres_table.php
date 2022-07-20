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
        Schema::create('game_genres', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('genre_1_name')->nullable();
            $table->string('genre_1_slug')->nullable();
            $table->string('genre_2_name')->nullable();
            $table->string('genre_2_slug')->nullable();
            $table->string('genre_3_name')->nullable();
            $table->string('genre_3_slug')->nullable();
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
        Schema::dropIfExists('game_genres');
    }
};
