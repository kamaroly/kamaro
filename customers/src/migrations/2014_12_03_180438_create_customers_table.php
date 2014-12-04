<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('customers');
        
        Schema::create('customers', function ($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('person_id');
            $table->string('account_number');
            $table->boolean('taxable')->default(1);

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
		Schema::dropIfExists('customers');
	}

}
