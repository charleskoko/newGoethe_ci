<?php
Route::group(['middleware' => ['auth', 'can:isAdmin,App\User']], function (){
    Route::get('/','Admin\AdminController@index')->name('user-panel');
    Route::get('/add', 'Admin\AdminController@create')->name('user-create');
    Route::get('/{user}/edit', 'Admin\AdminController@edit')->name('user-edit');
    Route::patch('/{user}', 'Admin\AdminController@update')->name('user-update');
    Route::post('/', 'Admin\AdminController@save')->name('user-save');
    Route::delete('/{user}', 'Admin\AdminController@delete')->name('user-delete');
});
