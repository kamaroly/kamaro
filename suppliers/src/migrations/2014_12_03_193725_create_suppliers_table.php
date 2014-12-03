<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::dropIfExists('store_config');
        
        Schema::create('store_locations', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->text('key');
            $table->text('value');
            $table->integer('location_id');

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
		//
	}

}
