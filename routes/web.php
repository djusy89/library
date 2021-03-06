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

Route::get('/books', 'BooksController@index');
Route::post('/books', 'BooksController@store');
Route::get('/books/{book}', 'BooksController@show');
Route::patch('/books/{book}', 'BooksController@edit');
Route::delete('/books/{book}', 'BooksController@destroy');
Route::get('/books', 'BooksController@search')->name('search');

