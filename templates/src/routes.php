<?php 
Route::get('/',array('as'=>'home','uses'=> function(){
	return View::make('templates::partials.home');

}));
Route::get('templates', function(){
	return View::make('templates::partials.home');

});