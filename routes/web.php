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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/books','BookController@index');
Route::get('/books/create','BookController@create')->name('create');
Route::get('/books/{id}/show','BookController@show')->name('show');
Route::post('/books','BookController@store')->name('store');
Route::get('/books/{id}/edit','BookController@edit')->name('edit');
Route::put('/books/{id}','BookController@update')->name('update');
Route::get('/books/{id}','BookController@destroy');




