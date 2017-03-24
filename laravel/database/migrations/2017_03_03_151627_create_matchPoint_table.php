<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchPoint', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('mid');
			
			$table->string('sheng')->default('--');
			$table->string('ping')->default('--');
			$table->string('fu')->default('--');	
			$table->string('score')->default('--');
			$table->string('result')->default('--');
			
			$table->string('team1')->default('--');
			$table->string('team2')->default('--');
			$table->string('season')->default('--');
			$table->string('league')->default('--');
			$table->string('round')->default('--');	
			$table->string('time')->default('--');	
			
			$table->unsignedInteger('point')->default(0);
			$table->string('goal')->default('-');
			$table->string('goal_lose')->default('-');
			$table->string('expect')->default('-');
			$table->string('percent')->default('-');


			$table->string('fi_point')->default('-');
			$table->string('fi_goal')->default('-');
			$table->string('fi_goal_lose')->default('-');
			$table->string('fi_expect')->default('-');
			$table->string('fi_percent')->default('-');

			$table->string('goal_same')->default('-');
			$table->string('goal_lose_same')->default('-');
			$table->string('point_same')->default('-');
			$table->string('expect_same')->default('-');
			$table->string('percent_same')->default('-');

			$table->string('fi_goal_same')->default('-');
			$table->string('fi_goal_lose_same')->default('-');
			$table->string('fi_point_same')->default('-');
			$table->string('fi_expect_same')->default('-');
			$table->string('fi_percent_same')->default('-');
			
			$table->unsignedInteger('point2')->default(0);
			$table->string('goal2')->default('-');
			$table->string('goal_lose2')->default('-');
			$table->string('expect2')->default('-');
			$table->string('percent2')->default('-');


			$table->string('fi_point2')->default('-');
			$table->string('fi_goal2')->default('-');
			$table->string('fi_goal_lose2')->default('-');
			$table->string('fi_expect2')->default('-');
			$table->string('fi_percent2')->default('-');

			$table->string('goal_same2')->default('-');
			$table->string('goal_lose_same2')->default('-');
			$table->string('point_same2')->default('-');
			$table->string('expect_same2')->default('-');
			$table->string('percent_same2')->default('-');

			$table->string('fi_goal_same2')->default('-');
			$table->string('fi_goal_lose_same2')->default('-');
			$table->string('fi_point_same2')->default('-');
			$table->string('fi_expect_same2')->default('-');
			$table->string('fi_percent_same2')->default('-');
			
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
        Schema::dropIfExists('matchPoint');
    }
}
