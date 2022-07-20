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
        Schema::create('game_screenshots', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->mediumText('screen_1')->nullable();
            $table->mediumText('screen_2')->nullable();
            $table->mediumText('screen_3')->nullable();
            $table->mediumText('screen_4')->nullable();
            $table->mediumText('screen_5')->nullable();
            $table->mediumText('screen_6')->nullable();
            $table->mediumText('screen_7')->nullable();
            $table->mediumText('screen_8')->nullable();
            $table->mediumText('screen_9')->nullable();
            $table->mediumText('screen_10')->nullable();
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
        Schema::dropIfExists('game_screenshots');
    }
};
