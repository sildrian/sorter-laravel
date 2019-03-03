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
/* test db
Route::get('/data-all', 'Sorter\SorterController@getIndex')->name('dataall');
Route::get('/data/{id}', 'Sorter\SorterController@getDataById')->name('dataall');
*/
Route::get('/gettxt/{txt}', 'Sorter\ShowUnsortController@getTxt')->name('datatxt');
Route::get('/dosort/{txt}', 'Sorter\SorterController@doSort')->name('dosort');