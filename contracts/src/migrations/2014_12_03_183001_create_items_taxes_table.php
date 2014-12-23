<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{ 

		
		Schema::dropIfExists('items_taxes');
        
        Schema::create('items_taxes', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('item_id')->length(10)->unsigned();
            $table->string('name');
            $table->string('percent');
            $table->integer('location_id')->length(10)->unsigned();

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
		Schema::dropIfExists('items_taxes');
	}

}
