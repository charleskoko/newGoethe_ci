<?php
Route::group([], function (){
    Route::post('/', 'Frontend\FrontendController@save')->name('frontend-new-request');

});
