<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_session', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('game_session_start_datetime');
            $table->dateTime('game_session_end_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_session');
    }
}
