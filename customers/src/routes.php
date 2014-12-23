<?php 
 ////////////////////////////////////////////////
 // Routes for the customers package of Kamaro //
 ////////////////////////////////////////////////
Route::group(array('prefix' => 'customers'), function()
{
    Route::get('/', function(){
		return View::make('customers::index');
    });

    Route::get('/new',function(){
    	return View::make('customers::partials.form');
    });
});