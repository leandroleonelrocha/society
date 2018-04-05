<?php

Route::group(['prefix' => 'amigos'], function () {

	Route::get('/','AmigosController@index')->name('amigos.index');

});