<?php

Route::group(['prefix' => 'perfil'], function () {

	Route::get('/','PerfilController@index')->name('perfil.index');

});