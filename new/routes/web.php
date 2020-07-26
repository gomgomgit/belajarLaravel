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

Route::get('/guardians', 'GuardianController@index');
Route::get('/guardians/create', 'GuardianController@create');
Route::post('/guardians/store', 'GuardianController@store');
Route::get('/guardians/edit/{id}', 'GuardianController@edit');
Route::put('/guardians/update/{id}', 'GuardianController@update');
Route::delete('/guardians/delete/{id}', 'GuardianController@delete');

Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/students/store', 'StudentController@store');
Route::get('/students/edit/{id}', 'StudentController@edit');
Route::put('/students/update/{id}', 'StudentController@update');
Route::delete('/students/delete/{id}', 'StudentController@delete');