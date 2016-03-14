<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','MyController@index');
Route::get('/log-in','MyController@signin' );
Route::get('/sign-up','MyController@signup');
Route::get('/forget-password','MyController@forgetpassword');
Route::post('/create-user','MyController@create');
Route::post('/check-user','MyController@login');
Route::post('/reset-password','MyController@resetpassword');
