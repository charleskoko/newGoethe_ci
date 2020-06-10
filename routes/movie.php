<?php
Route::group(['middleware' => ['auth']], function (){
    Route::get('/','Movie\MovieController@index')->name('movie-overview');
    Route::get('/add', 'Movie\MovieController@create')->name('movie-create');
    Route::get('/{movie}/edit', 'Movie\MovieController@edit')->name('movie-edit');
    Route::patch('/{movie}', 'Movie\MovieController@update')->name('movie-update');
    Route::post('/', 'Movie\MovieController@save')->name('movie-save');
    Route::delete('/{movie}', 'Movie\MovieController@delete')->name('movie-delete');
});
