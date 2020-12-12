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

    Route::get('/add-supervisor', function () {
        return view('add-supervisor');
});

Route::get('/supervisor-list', function () {
    return view('supervisor-list');
});

Route::get('/', 'AdminController@home')->name('welcome');

Route::get('/third-proposal', function () {
    return view('third-proposal');
});

Route::get('/final-proposal', function () {
    return view('final-proposal');
});