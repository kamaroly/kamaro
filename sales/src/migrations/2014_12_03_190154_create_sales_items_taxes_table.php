<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesItemsTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::dropIfExists('sales_items_taxes');
        
        Schema::create('sales_items_taxes', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('sale_id')->lenght(10)->unsigned();
            $table->integer('item_id')->lenght(10)->unsigned();
            $table->string('name',30);;
            $table->integer('line',3);
            $table->decimal('percent',15,2);

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
		Schema::dropIfExists('sales_items_taxes');
	}

}
