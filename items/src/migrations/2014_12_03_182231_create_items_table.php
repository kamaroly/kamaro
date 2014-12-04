<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{		
		Schema::dropIfExists('items');
        
        Schema::create('items', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->integer('supplier_id')->unsigned();
            $table->string('item_number');
            $table->string('description');
            $table->decimal('cost_price',15,2)->default(0.00);
            $table->decimal('unit_price',15,2)->default(0.00);
            $table->decimal('quantity',15,2)->default(0.00);
            $table->decimal('reorder_level',15,2)->default(0.00);
            $table->boolean('allow_alt_description');
            $table->boolean('is_serialized');
            $table->boolean('deleted')->default(0);

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
		Schema::dropIfExists('items');
	}

}
