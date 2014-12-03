<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
        Schema::dropIfExists('sales_payments');
        
        Schema::create('sales_payments', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('sale_id');
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
        Schema::dropIfExists('sales_payments');
	}

}
