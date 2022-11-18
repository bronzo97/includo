<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lavoratore/home', 'HomeController@lavoratore')->name('lavoratore.home')->middleware('role');
Route::get('azienda/home', 'HomeController@azienda')->name('azienda.home')->middleware('role');
Route::get('istituto/home', 'HomeController@istituto')->name('istituto.home')->middleware('role');
