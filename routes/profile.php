<?php
Route::group(['middleware' => ['auth']], function (){
    Route::get('/view','users\ProfileController@view')->name('profile-view');
    Route::get('/edit', 'Users\ProfileController@edit')->name('profile-edit');
    Route::get('/{user}/password', 'Users\ProfileController@newPassword')->name('user-password');
    Route::patch('/', 'Users\ProfileController@update')->name('profile-update');
});
