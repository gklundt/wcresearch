<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game', function (Blueprint $table) {
            $table->integer('player_experience_id');
            $table->foreign('player_experience_id')->references('id')->on('player_experience');
        });

        Schema::table('game_session', function (Blueprint $table) {
            $table->integer('game_mode_id');
            $table->integer('game_difficulty_id');
            $table->integer('game_terrain_id');
            $table->foreign('game_mode_id')->references('id')->on('game_mode');
            $table->foreign('game_difficulty_id')->references('id')->on('game_difficulty');
            $table->foreign('game_terrain_id')->references('id')->on('game_terrain');
        });

        Schema::table('game_stage', function (Blueprint $table) {
            $table->integer('game_session_id');
            $table->foreign('game_session_id')->references('id')->on('game_session');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
