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
			$table->string('league')->default("none");
			$table->string('season')->default("0/0");
			$table->string('round')->default("0");
			$table->dateTime('time');
			$table->string('status')->default("x");
			$table->string('score')->default("0:0");
			$table->string('team1')->default("--");
			$table->unsignedInteger('point1')->default("0");
			$table->unsignedInteger('rank1')->default("0");
			$table->string('team2')->default("--");;
			$table->unsignedInteger('point2')->default("0");
			$table->unsignedInteger('rank2')->default("0");
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
