<?php 
Route::get('/',array('before'=>'Sentinel\hasAccess:admin','as'=>'home','uses'=> function(){
	return View::make('templates::partials.home');

}));
Route::get('templates', function(){
	return View::make('templates::partials.home');

});