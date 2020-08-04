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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/menus', 'MenuController@index')->name('menu');
Route::get('/menus/create', 'MenuController@create')->name('createMenu');
Route::post('/menus/store', 'MenuController@store')->name('storeMenu');
Route::get('/menus/edit/{id}', 'MenuController@edit')->where('id', '[0-9]+')->name('editMenu');
Route::put('/menus/update/{id}', 'MenuController@update')->where('id', '[0-9]+')->name('updateMenu');
Route::delete('/menus/delete/{id}', 'MenuController@delete')->where('id', '[0-9]+')->name('deleteMenu');

Route::get('/categories', 'CategoryController@index')->name('category');
Route::get('/categories/create', 'CategoryController@create')->name('createCategory');
Route::post('/categories/store', 'CategoryController@store')->name('storeCategory');
Route::get('/categories/edit/{id}', 'CategoryController@edit')->where('id', '[0-9]+')->name('editCategory');
Route::put('/categories/update/{id}', 'CategoryController@update')->where('id', '[0-9]+')->name('updateCategory');
Route::delete('/categories/delete/{id}', 'CategoryController@delete')->where('id', '[0-9]+')->name('deleteCategory');

Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/login-process', 'AuthController@loginProcess');
Route::post('/register-process', 'AuthController@registerProcess');
Route::post('/logout', 'AuthController@logout');
