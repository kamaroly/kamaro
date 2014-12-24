<?php 
 ////////////////////////////////////////////////
 // Routes for the customers package of Kamaro //
 ////////////////////////////////////////////////
 use Kamaro\Items\Controllers\ItemsController as ItemsController;

Route::group(array('prefix' => 'items','before'=>'Sentinel\hasAccess:admin'), function()
{
    Route::get('/',array('as'  =>'items_home',
    	                 'uses'=>'Kamaro\Items\Controllers\ItemsController@index')
              );

    Route::get('/save','Kamaro\Items\Controllers\ItemsController@store');
});