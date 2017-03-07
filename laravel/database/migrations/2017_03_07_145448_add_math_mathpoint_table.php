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
		$table->string('goal')->default('-');
		$table->string('point')->default('-');
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
