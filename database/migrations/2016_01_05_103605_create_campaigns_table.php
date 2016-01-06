<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns',function (Blueprint $table){
            $table->increments('id');
            $table->integer('clients_id')->unsigned();
			$table->foreign('clients_id')->references('id')->on('users')
                    ->onDelete('no action');
            $table->string('name');
            $table->integer('gsm_number');
            $table->foreign('gsm_number')->references('gsm_number')->on('gsm_numbers')
                    ->onDelete('no action');
			$table->string('unbounce_id')->unique();
            $table->string('ga_view_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('campaigns_login')->unique();
            $table->string('compaigns_password');
            $table->string('notify_email');
            $table->string('noreply_email');
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
        Schema::drop('campaigns');
    }
}
