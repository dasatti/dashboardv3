<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('emaill');
            $table->string('phone');
            $table->string('country');
            $table->text('message');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->date('email_date');
            $table->time('email_time');
            $table->string('request_id');
            $table->string('unbounce_id');
            $table->enum('test_data', ['yes', 'no'])->default('no');
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
        Schema::drop('emails');
    }
}
