<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('calls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('callerid',10);
            $table->string('gsm_numbers_id',10);
			$table->string('forward_number',10);
			$table->dateTime('call_start');
			$table->dateTime('call_end');
			$table->integer('total_duration');			
			$table->integer('answer_duration');			
            $table->enum('is_test_data', ['yes', 'no'])->default('no');			
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
        Schema::drop('calls');
    }
}
