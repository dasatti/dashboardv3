<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGsmNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gsm_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gsm_number')->unique();
			$table->enum('is_test', ['1', '0'])->default('0');	
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
        Schema::drop('gsm_numbers');
    }
}
