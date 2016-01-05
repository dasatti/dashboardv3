<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms',function(Blueprint $table){
            $table->increments('id');
            $table->string('caller_id');
            $table->string('gsm_number');
            $table->string('forward_number');
            $table->text('sms');
            $table->dateTime('sms_date');
            $table->timestamps;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sms');
    }
}