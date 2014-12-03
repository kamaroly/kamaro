<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::dropIfExists('receivings');
        
        Schema::create('receivings', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('user_id')->default(0);
            $table->text('comment');
            $table->string('payment_type');

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
		
		Schema::dropIfExists('receivings');
	}

}
