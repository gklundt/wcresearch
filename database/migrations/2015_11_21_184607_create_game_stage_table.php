<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_stage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('stage_start_datetime');
            $table->dateTime('stage_end_datetime');
            $table->integer('tokens_available',false,true);
            $table->integer('tokens_collected',false,true);
            $table->integer('number_of_opponents',false,true);
            $table->integer('finish_position',false,true);
            $table->boolean('stage_completed');
            $table->integer('number_of_static_obstacles',false,true);
            $table->integer('number_of_moving_obstacles',false,true);
            $table->integer('opponent_collisions',false,true);
            $table->integer('static_obstacle_collisions',false,true);
            $table->integer('moving_obstacle_collisions',false,true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_stage');
    }
}
