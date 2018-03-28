<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

//Route::get('validate', 'LoginController@validate');

Route::post('/profile', 'LoginController@validar')->name('profile');

Route::get('/deshboard', 'LoginController@deshboard')->name('deshboard');