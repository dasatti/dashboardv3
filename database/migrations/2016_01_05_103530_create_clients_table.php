<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('username');
            $table->string('password',60);
            $table->string('email');
            $table->string('thumbnail');
            $table->string('company');          
            $table->integer('phone_number');         
            $table->text('address');
            $table->enum('account_type', ['admin', 'client'])->default('client');
            $table->enum('email_status', ['enable', 'disable'])->default('enable');
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
        Schema::drop('clients');
    }
}
