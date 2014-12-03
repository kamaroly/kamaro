<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::dropIfExists('sales_items');
        
        Schema::create('sales_items', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('sale_id');
            $table->integer('item_id');
            $table->string('description',30);
            $table->string('serialnumber',30);
            $table->integer('line',3);
            $table->decimal('quantity_purchased',15,2);
            $table->decimal('item_cost_price',15,2);
            $table->decimal('item_unit_price',15,2);
            $table->decimal('discount_percent',15,2);
            $table->integer('item_location')->unsigned();

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
		Schema::dropIfExists('sales_items');
	}

}
