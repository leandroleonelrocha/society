<?php

Route::group(['prefix' => 'grupos'], function () {

	Route::get('/','GrupoController@index')->name('grupos.index');

});