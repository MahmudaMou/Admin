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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-data','galarycontroller@index');
Route::post('/add','galarycontroller@store')->name('addimg');
Route::get('/list','galarycontroller@newview');
Route::get('/category/{id}','galarycontroller@categoyWiseData');
