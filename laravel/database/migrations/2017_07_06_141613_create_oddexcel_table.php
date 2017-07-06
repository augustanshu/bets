<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOddexcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oddExcel', function (Blueprint $table) {
            $table->increments('id');
			$table->string('sheng')->default('0.00');
			$table->string('ping')->default('0.00');
			$table->string('fu')->default('0.00');
			$table->string('peifu');
			$table->string('level');
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
        Schema::dropIfExists('oddExcel');
    }
}
