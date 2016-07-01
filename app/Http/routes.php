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
        if (Auth::check()) {
            return redirect('inbox');
        } else {
            return view('index');
        }
    }
)->name('index');

Route::get('/inbox', 'InboxController@showInbox')->name('inbox');

Route::auth();

Route::get('user/{user}', 'UserController@show');
Route::get('user', 'UserController@index');
Route::get('user/contact/{user}', 'UserController@isContact');
Route::post('user/contact/{user}', 'UserController@addContact');

Route::post('mail/', 'MailController@store');
Route::get('mail/inbox', 'MailController@inbox');
Route::get('mail/sent', 'MailController@sent');
Route::get('mail/read/{mail}', 'MailController@read');
Route::delete('mail/{mail}', 'MailController@destroy');
