<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'MainController@Home');

Route::post('hello', 'MainController@Navigasi');

Route::post('register', 'MainController@Registrasi');

Route::get('reg', function(){
	 return view('register');
});

Route::get('logout', function(){
	 session()->flush();
	 return redirect('/');
});