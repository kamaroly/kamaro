<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConstraints extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//customers table Constraints
Schema::table('customers', function($table)
{
 $table->foreign('person_id')
       ->references('id')->on('people')
       ->onDelete('cascade');
});


Schema::table('inventory', function($table)
{
 $table->foreign('trans_items')
       ->references('id')->on('items')
 
});


Schema::table('items', function($table)
{
 $table->foreign('supplier_id')
       ->references('person_id')->on('suppliers');
       
});

Schema::table('items_taxes', function($table)
{
 $table->foreign('item_id')
       ->references('id')->on('items')
       ->onDelete('cascade');
       
});

Schema::table('item_kit_items', function($table)
{
 $table->foreign('item_kit_id')
       ->references('id')->on('item_kits')
       ->onDelete('cascade');
$table->foreign('item_id')
       ->references('id')->on('item_id')
       ->onDelete('cascade');
       
});


Schema::table('receivings_items', function($table)
{
 $table->foreign('item_id')
       ->references('id')->on('items');

 $table->foreign('supplier_id')
       ->references('person_id')->on('item_id');

 $table->foreign('receiving_id')
       ->references('id')->on('receivings');     
});


Schema::table('sales_items', function($table)
{
 $table->foreign('item_id')
       ->references('id')->on('items');  

 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

$table->foreign('item_location')
       ->references('id')->on('stock_locations'); 
});

Schema::table('sales_items_taxes', function($table)
{
 $table->foreign('item_id')
       ->references('id')->on('items');  

 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

});

Schema::table('sales_payments', function($table)
{
 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

});

Schema::table('sales_payments', function($table)
{

 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

});

Schema::table('sales_suspended', function($table)
{
 $table->foreign('customer_id')
       ->references('person_id')->on('customers'); 

});

Schema::table('sales_suspended_items', function($table)
{
 $table->foreign('item_id')
       ->references('id')->on('items');  

 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

$table->foreign('item_location')
       ->references('id')->on('stock_locations'); 
});


Schema::table('sales_suspended_items_taxes', function($table)
{
 $table->foreign('item_id')
       ->references('id')->on('items');  

 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

});

Schema::table('sales_suspended_payments', function($table)
{

 $table->foreign('sale_id')
       ->references('id')->on('sales'); 

});

Schema::table('item_quantities', function($table)
{

 $table->foreign('item_id')
       ->references('id')->on('items'); 
 $table->foreign('location_id')
       ->references('id')->on('stock_locations'); 
});

Schema::table('suppliers', function($table)
{

 $table->foreign('person_id')
       ->references('id')->on('people')
       ->onDelete('cascade'); 
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
