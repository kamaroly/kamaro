<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesSuspendedItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('sales_suspended_items');
        
        Schema::create('sales_suspended_items', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('sale_id')->lenght(10)->unsigned();
            $table->integer('item_id')->lenght(10)->unsigned();
            $table->string('description',30);
            $table->string('serialnumber',30);
            $table->integer('line',3);
            $table->decimal('quantity_purchased',15,2);
            $table->decimal('item_cost_price',15,2);
            $table->decimal('item_unit_price',15,2);
            $table->decimal('discount_percent',15,2);
            $table->integer('item_location')->lenght(10)->unsigned();

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
		Schema::dropIfExists('sales_suspended_items');
	}

}
