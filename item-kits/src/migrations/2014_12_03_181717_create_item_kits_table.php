<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemKitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
         Schema::dropIfExists('item_kits');
        
        Schema::create('item_kits', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('id');
            $table->string('name');
            $table->string('description');
            $table->integer('location_id');
            $table->integer('user_id');
            
            $table->timestamps();
        });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
          Schema::dropIfExists('item_kits');		
	}

}
