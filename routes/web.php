<?php

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

Route::get('/','LandingController@index');

Route::get('/add','ItemController@add');

Route::post('/store','ItemController@store');

Route::get('/edit/{id}','ItemController@edit');

Route::post('/update/{id}','ItemController@update');

Route::get('/delete/{id}','ItemController@destroy');

Route::get('/admin','ItemController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/support', 'SupportController@index');



