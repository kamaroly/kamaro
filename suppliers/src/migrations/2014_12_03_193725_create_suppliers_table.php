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

	    Schema::dropIfExists('suppliers');
        
        Schema::create('suppliers', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('person_id');
            $table->string('company_name');
            $table->string('account_number');

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
		Schema::dropIfExists('suppliers');
	}

}
