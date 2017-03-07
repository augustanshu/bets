<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMathMathpointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matchpoint', function (Blueprint $table) {
			$table->string('point_same')->default('-');
		$table->string('goal')->default('-');
		$table->string('goal_lose')->default('-');
		//$table->string('goal2')->default('-');
		//$table->string('goal2_lose')->default('-');
		$table->string('except')->default('-');
		$table->string('percent')->default('-');
		//$table->string('percent2')->default('-');
		$table->string('fi_goal')->default('-');
		$table->string('fi_goal_lose')->default('-');
		//$table->string('fi_goal2')->default('-');
		//$table->string('fi_goal2_lose')->default('-');
		$table->string('fi_except')->default('-');
		$table->string('fi_percent')->default('-');
		//$table->string('fi_percent2')->default('-');
		$table->string('goal_same')->default('-');
		$table->string('goal_same_lose')->default('-');
		//$table->string('goal2_same')->default('-');
		//$table->string('goal2_same_lose')->default('-');
		$table->string('except_same')->default('-');
		$table->string('percent_same')->default('-');
		//$table->string('percent2_same')->default('-');
		$table->string('fi_same_goal')->default('-');
		$table->string('fi_same_goal_lose')->default('-');
		//$table->string('fi_same_goal2')->default('-');
		//$table->string('fi_same_goal2_lose')->default('-');
		$table->string('fi_same_except')->default('-');
		$table->string('fi_same_percent')->default('-');
		//$table->string('fi_same_percent2')->default('-');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matchpoint', function (Blueprint $table) {
            //
        });
    }
}
