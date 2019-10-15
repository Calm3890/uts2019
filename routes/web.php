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
Route::get('/uts','uts@index');
Route::get('/uts/create','uts@new_form');
Route::post('/uts','uts@save');
Route::get('/uts/{id}/edit','uts@edit_form');
Route::post('/uts/edit','uts@edit');
Route::get('/uts/{id}/delete','uts@delete');
Route::get('/uts/search','uts@search');

