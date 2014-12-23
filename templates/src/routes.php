<?php 
Route::get('/', function(){
	return View::make('templates::partials.home');

});
Route::get('templates', function(){
	return View::make('templates::partials.home');

});