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

Route::get('/menus', 'MenuController@index');
Route::get('/menus/create', 'MenuController@create');
Route::post('/menus/store', 'MenuController@store');
Route::get('/menus/edit/{id}', 'MenuController@edit');
Route::put('/menus/update/{id}', 'MenuController@update');
Route::delete('/menus/delete/{id}', 'MenuController@delete');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories/store', 'CategoryController@store');
Route::get('/categories/edit/{id}', 'CategoryController@edit');
Route::put('/categories/update/{id}', 'CategoryController@update');
Route::delete('/categories/delete/{id}', 'CategoryController@delete');
