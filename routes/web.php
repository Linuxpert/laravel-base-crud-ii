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

Route::get('/', 'MovieController@home') -> name('home');
Route::get('/movie/show/{id}', 'MovieController@show') -> name('show');

Route::get('/movie/create', 'MovieController@create') -> name('create');
Route::post('/movie/store', 'MovieController@store') -> name('store');

Route::get('/movie/edit/{id}', 'MovieController@edit') -> name('edit');
Route::post('/movie/update/{id}', 'MovieController@update') -> name('update');

Route::get('/movie/delete/{id}', 'MovieController@delete') -> name('delete');
