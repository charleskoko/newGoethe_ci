<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    ///Alert::success('Success Title', 'Success Message');
    return view('welcome');
});
App::setLocale('fr');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/push','PushController@store');
Route::get('/push','PushController@push')->name('push');
