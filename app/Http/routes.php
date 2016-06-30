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

Route::get(
    '/',
    function () {
        return view('index');
    }
)->name('index');

Route::get('/inbox', 'InboxController@showInbox')->name('inbox');

Route::auth();

Route::get('users/{user}', 'UserController@show');
Route::get('users/', 'UserController@index');
