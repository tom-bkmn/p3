<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a nightmare. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested. Then
| spend the next 3 hours debugging.
|
*/

Route::get('/', function()
{
    return View::make('landingPage');
});

Route::post('/loremTool', function()
{
    $data = Input::all();
    //var_dump($data);
    return View::make('lorem')
    	->with('data', $data);
});

Route::get('/loremTool', function()
{
    return View::make('lorem');
});

Route::post('/generateUsers', function()
{
    $data = Input::all();
    //var_dump($data);
    return View::make('users')
    	->with('data', $data);
});

Route::get('/generateUsers', function()
{
    return View::make('users');
});


