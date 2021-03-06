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
		Schema::create('calls',function(Blueprint $table){
            $table->increments('id');
            $table->string('callerid');
            $table->integer('gsm_number');
            $table->foreign('gsm_number')->references('gsm_number')->on('gsm_numbers')
                    ->onDelete('no action');
            $table->string('forward_number',20);
			$table->dateTime('call_start');
            $table->dateTime('call_answer');
			$table->dateTime('call_end');
			$table->integer('total_duration');			
			$table->integer('answer_duration');	     
            $table->enum('status',['ANSWER','BUSY','NOANSWER','CONGESTION','CHANUNAVAIL','ANSWERED','CANCEL','REJECT']); 		
            $table->enum('test_data', ['1', '0'])->default('0');		
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