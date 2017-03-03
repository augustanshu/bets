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
			$table->unsignedInteger('point')->default(0);
			$table->string('team1')->default('--');
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
