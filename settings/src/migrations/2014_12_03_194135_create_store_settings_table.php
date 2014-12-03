<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::dropIfExists('store_config');
        
        Schema::create('store_config', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->text('key');
            $table->text('value');
            $table->integer('location_id');

            $table->timestamps();
        });

      DB::table('store_config')->insert(array(
            'key' => 'address',
            'value' => 'KK 125 Kigali',
            'location_id' =>0,
        ));
          DB::table('store_config')->insert(array(
            'key' => 'company',
            'value' => 'Kamaro Point of Sale',
            'location_id' =>0,
        ));
               DB::table('store_config')->insert(array(
            'key' => 'default_tax_rate',
            'value' => '18',
            'location_id' =>0,
        ));
                    DB::table('store_config')->insert(array(
            'key' => 'email',
            'value' => 'info@kamaroly.com',
            'location_id' =>0,
        ));
        DB::table('store_config')->insert(array(
            'key' => 'phone',
            'value' => '+250722123000',
            'location_id' =>0,
        ));
        DB::table('store_config')->insert(array(
            'key' => 'return_policy',
            'value' => '7 days money back warranty',
            'location_id' =>0,
        ));

        DB::table('store_config')->insert(array(
            'key' => 'timezone',
            'value' => 'Africa/Caire',
            'location_id' =>0,
        ));

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
