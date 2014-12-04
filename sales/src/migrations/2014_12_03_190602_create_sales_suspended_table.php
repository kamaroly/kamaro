<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesSuspendedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{ 
        Schema::dropIfExists('sales_suspended');
        
        Schema::create('sales_suspended', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('customer_id')->length(10)->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('comment');
            $table->integer('sale_id')->length(10)->unsigned()->nullable();
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
		Schema::dropIfExists('sales_suspended');
	}

}
