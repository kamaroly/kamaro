<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemkitItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('item_kit_items');
        
        Schema::create('item_kit_items', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('item_kit_id');
            $table->integer('item_id');
            $table->decimal('quantity');
            $table->boolean('user_id');
            
            $table->timestamps();
            //adding keys
            $table->primary(array('item_kit_id', 'item_id'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::dropIfExists('item_kit_items');
	}

}
