<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| Its a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WorkoutController@home');

Route::get('/workout', 'WorkoutController@index');

Route::get('/bootstrap', function() {
    return view('bootstrap');
});

