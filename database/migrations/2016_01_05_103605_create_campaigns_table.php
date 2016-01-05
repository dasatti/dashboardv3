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
            $table->string('clients_id');
            $table->string('name');
            $table->string('gsm_numbers',10);
            $table->string('unbounce_id');
            $table->string('ga_view_id');
            $table->dateTime('stat_date');
            $table->dateTime('end_date');
            $table->string('campaign_login');
            $table->string('compaign_password');
            $table->enum('notify_email', ['yes', 'no'])->default('no');
            $table->enum('noreply_email', ['yes', 'no'])->default('no');
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
