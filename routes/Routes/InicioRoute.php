<?php

Route::group(['prefix' => 'inicio'], function () {

	Route::get('/','InicioController@index')->name('inicio.index');

});