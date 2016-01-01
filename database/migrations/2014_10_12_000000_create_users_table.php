<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
			$table->string('username');
			$table->string('thumbnail');
			$table->string('company');
			$table->string('phone_number');
			$table->text('address');
			$table->enum('account_type', ['admin', 'client'])->default('client');
			$table->enum('email_status', ['enable', 'disable'])->default('enable');
			$table->enum('enabled', ['enable', 'disable'])->default('enable');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
