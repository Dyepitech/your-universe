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
        Schema::create('game_platforms', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('platform_1_name')->nullable();
            $table->string('platform_1_slug')->nullable();
            $table->string('platform_1_image')->nullable();
            $table->integer('platform_1_year_start')->nullable();
            $table->integer('platform_1_year_end')->nullable();
            $table->integer('platform_1_games_count')->nullable();
            $table->date('platform_1_released_at')->nullable();
            $table->string('platform_2_name')->nullable();
            $table->string('platform_2_slug')->nullable();
            $table->string('platform_2_image')->nullable();
            $table->integer('platform_2_year_start')->nullable();
            $table->integer('platform_2_year_end')->nullable();
            $table->integer('platform_2_games_count')->nullable();
            $table->date('platform_2_released_at')->nullable();
            $table->string('platform_3_name')->nullable();
            $table->string('platform_3_slug')->nullable();
            $table->string('platform_3_image')->nullable();
            $table->integer('platform_3_year_start')->nullable();
            $table->integer('platform_3_year_end')->nullable();
            $table->integer('platform_3_games_count')->nullable();
            $table->date('platform_3_released_at')->nullable();
            $table->string('platform_4_name')->nullable();
            $table->string('platform_4_slug')->nullable();
            $table->string('platform_4_image')->nullable();
            $table->integer('platform_4_year_start')->nullable();
            $table->integer('platform_4_year_end')->nullable();
            $table->integer('platform_4_games_count')->nullable();
            $table->date('platform_4_released_at')->nullable();
            $table->string('platform_5_name')->nullable();
            $table->string('platform_5_slug')->nullable();
            $table->string('platform_5_image')->nullable();
            $table->integer('platform_5_year_start')->nullable();
            $table->integer('platform_5_year_end')->nullable();
            $table->integer('platform_5_games_count')->nullable();
            $table->date('platform_5_released_at')->nullable();          
            $table->string('platform_6_name')->nullable();
            $table->string('platform_6_slug')->nullable();
            $table->string('platform_6_image')->nullable();
            $table->integer('platform_6_year_start')->nullable();
            $table->integer('platform_6_year_end')->nullable();
            $table->integer('platform_6_games_count')->nullable();
            $table->date('platform_6_released_at')->nullable();
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
        Schema::dropIfExists('game_platforms');
    }
};
