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
        Schema::create('game_stores', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('store_1_name')->nullable();
            $table->string('store_1_slug')->nullable();
            $table->string('store_1_domain')->nullable();
            $table->string('store_2_name')->nullable();
            $table->string('store_2_slug')->nullable();
            $table->string('store_2_domain')->nullable();
            $table->string('store_3_name')->nullable();
            $table->string('store_3_slug')->nullable();
            $table->string('store_3_domain')->nullable();
            
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
        Schema::dropIfExists('game_stores');
    }
};
