<?php

Route::group(['middleware' => 'guest'], function()
{
	Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
});

Route::group(['middleware' => ['auth', 'root'], 'prefix' => 'root'], function()
{
	Route::get('/home', function () 
	{
	   return view('root.home');
	});		
});

Route::group(['middleware' => ['auth', 'admin']], function()
{
	Route::get('/home', function () 
	{
	   return view('main');
	});		
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


