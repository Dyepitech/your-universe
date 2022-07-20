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
        Schema::create('game_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->string('exc_title')->nullable();
            $table->integer('exc_count')->nullable();
            $table->float('exc_percent')->nullable();
            $table->string('rec_title')->nullable();
            $table->integer('rec_count')->nullable();
            $table->float('rec_percent')->nullable();
            $table->string('meh_title')->nullable();
            $table->integer('meh_count')->nullable();
            $table->float('meh_percent')->nullable();
            $table->string('ski_title')->nullable();
            $table->integer('ski_count')->nullable();
            $table->float('ski_percent')->nullable();
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
        Schema::dropIfExists('game_ratings');
    }
};
