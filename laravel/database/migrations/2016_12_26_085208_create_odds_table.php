<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odds', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('mid');
			$table->unsignedInteger('cid');
			$table->float('sheng')->default('0.00');
			$table->float('ping')->default('0.00');
			$table->float('fu')->default('0.00');
			$table->dateTime('updatetime');
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
         Schema::dropIfExists('odds');
    }
}
