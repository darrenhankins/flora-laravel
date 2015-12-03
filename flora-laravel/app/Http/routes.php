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

Route::get('/', function () {
    return view('welcome');
});



Route::get('register', 'PageController@register');

Route::get('login', 'PageController@login');

Route::get('flora', 'PageController@flora');

Route::get('see_flora', 'PageController@see_flora');

Route::get('new_flora', 'PageController@new_flora');
