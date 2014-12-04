<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesSuspendedPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::dropIfExists('sales_suspended_payments');
		
		Schema::create('sales_suspended_payments', function ($table)
		{
		    $table->engine = 'InnoDB';
		    
		    $table->integer('sale_id')->lenght(10)->unsigned();
		    $table->string('payment_type');
		    $table->decimal('payment_amount',15,2);
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
		Schema::dropIfExists('sales_suspended_payments');
	}

}
