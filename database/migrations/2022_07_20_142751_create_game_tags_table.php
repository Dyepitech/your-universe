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
        Schema::create('game_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('tag_1_name')->nullable();
            $table->string('tag_1_slug')->nullable();
            $table->string('tag_2_name')->nullable();
            $table->string('tag_2_slug')->nullable();
            $table->string('tag_3_name')->nullable();
            $table->string('tag_3_slug')->nullable();
            $table->string('tag_4_name')->nullable();
            $table->string('tag_4_slug')->nullable();
            $table->string('tag_5_name')->nullable();
            $table->string('tag_5_slug')->nullable();
            $table->string('tag_6_name')->nullable();
            $table->string('tag_6_slug')->nullable();
            $table->string('tag_7_name')->nullable();
            $table->string('tag_7_slug')->nullable();
            $table->string('tag_8_name')->nullable();
            $table->string('tag_8_slug')->nullable();
            $table->string('tag_9_name')->nullable();
            $table->string('tag_9_slug')->nullable();
            $table->string('tag_10_name')->nullable();
            $table->string('tag_10_slug')->nullable();
            $table->string('tag_11_name')->nullable();
            $table->string('tag_11_slug')->nullable();
            $table->string('tag_12_name')->nullable();
            $table->string('tag_12_slug')->nullable();
            $table->string('tag_13_name')->nullable();
            $table->string('tag_13_slug')->nullable();
            $table->string('tag_14_name')->nullable();
            $table->string('tag_14_slug')->nullable();
            $table->string('tag_15_name')->nullable();
            $table->string('tag_15_slug')->nullable();
            $table->string('tag_16_name')->nullable();
            $table->string('tag_16_slug')->nullable();
            $table->string('tag_17_name')->nullable();
            $table->string('tag_17_slug')->nullable();
            $table->string('tag_18_name')->nullable();
            $table->string('tag_18_slug')->nullable();
            $table->string('tag_19_name')->nullable();
            $table->string('tag_19_slug')->nullable();
            $table->string('tag_20_name')->nullable();
            $table->string('tag_20_slug')->nullable();
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
        Schema::dropIfExists('game_tags');
    }
};
