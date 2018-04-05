<?php

Route::group(['prefix' => 'fotos'], function () {

	Route::get('/','FotosController@index')->name('fotos.index');

});