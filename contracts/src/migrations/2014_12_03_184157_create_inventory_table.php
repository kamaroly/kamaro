<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::dropIfExists('inventory');
        
        Schema::create('inventory', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('trans_items',false,10);
            $table->integer('trans_user')->default(0);
            $table->text('trans_comment');
            $table->integer('trans_location');

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
		Schema::dropIfExists('inventory');
	}

}
