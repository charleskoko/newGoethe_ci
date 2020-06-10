<?php
Route::group(['middleware' => ['auth']], function (){
    Route::get('/add', 'LoanRequest\LoanRequestController@create')->name('loanRequest-create');
    Route::post('/', 'LoanRequest\LoanRequestController@save')->name('loanRequest-save');
    Route::get('/','LoanRequest\LoanRequestController@index')->name('loanRequest');
    Route::get('/{loanRequest}/edit', 'LoanRequest\LoanRequestController@edit')->name('loanRequest-edit');
    Route::patch('/{loanRequest}', 'LoanRequest\LoanRequestController@update')->name('loanRequest-update');
    Route::delete('/{loanRequest}', 'LoanRequest\LoanRequestController@delete')->name('loanRequest-delete');
});
