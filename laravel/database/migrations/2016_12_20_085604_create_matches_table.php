<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('mid');
			$table->string('timeStage');
			$table->string('matchType');
			$table->string('round');
			$table->dateTime('time');
			$table->string('status');
			$table->string('score')->default("0:0");
			$table->string('team1');
			$table->unsignedInteger('point1')->default("0");;
			$table->string('team2');
			$table->unsignedInteger('point2')->default("0");;
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
        Schema::dropIfExists('matches');
    }
}
