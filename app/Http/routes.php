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
Route::get('dashboard', function () {
    return view('pages.dashboard');
});
Route::group(['middleware' => 'auth'], function () {

Route::get('panel','ContactsController@panel' );

    Route::get('create', function () {
        return view('forms.addContact');

    });
Route::resource('contacts','ContactsController');


});
    Route::get('/home', function () {

    return view('welcome');
});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');