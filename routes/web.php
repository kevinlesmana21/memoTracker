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
    return view('layouts/index');
});

Route::get('/view', 'MemoController@view')->name('view');
Route::get('/create', 'MemoController@create');
Route::post('/view', 'MemoController@store');
Route::get('/delete/{no}', 'MemoController@delete');
Route::get('/edit/{no}', 'MemoController@edit');
Route::put('/update/{no}', 'MemoController@update');