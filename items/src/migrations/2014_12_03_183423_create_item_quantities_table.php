<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemQuantitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::dropIfExists('item_quantities');
        
        Schema::create('item_quantities', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('item_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->decimal('quantity',15,2);

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
		 Schema::dropIfExists('item_quantities');
	}

}
