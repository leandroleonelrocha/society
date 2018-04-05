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
    return view('users.login');
})->name('login');

//Route::get('validate', 'LoginController@validate');


Route::post('/profile', 'LoginController@validar')->name('profile');
Route::get('/deshboard', 'LoginController@deshboard')->name('deshboard');
Route::post('/logout', 'LoginController@logout')->name('logout');

require(__Dir__ . '/Routes/InicioRoute.php');
require(__Dir__ . '/Routes/AmigosRoute.php');
require(__Dir__ . '/Routes/FotosRoute.php');
require(__Dir__ . '/Routes/PerfilRoute.php');
require(__Dir__ . '/Routes/GruposRoute.php');