<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

	    Schema::dropIfExists('sales');
        
        Schema::create('sales', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('customer_id',false);
            $table->integer('user_id',false);
            $table->text('comment');
            $table->integer('sale_id');
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
		 Schema::dropIfExists('sales');
	}

}
