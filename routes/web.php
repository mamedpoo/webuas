<?php

Route::get('', 'RentalController@index')->name('index');
Route::get('show', 'RentalController@show')->name('show');
Route::get('create', 'RentalController@create')->name('create');
Route::post('insert', 'RentalController@insert')->name('insert');
Route::get('delete/{id}', 'RentalController@delete')->name('delete');
Route::get('edit/{id}', 'RentalController@edit')->name('edit');
Route::post('edit/{id}', 'RentalController@submitedit')->name('submitedit');
