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


Route::get('/', 'AdminController@home');

    
    


    Route::get('/supervisor-list', 'AdminController@list');


Route::get('/', 'AdminController@home')->name('welcome');


Route::get('/third-proposal', 'AdminController@third');


Route::get('/final-proposal', 'AdminController@final');


// super visor
Route::get('/add-supervisor', 'Admin\SupervisorController@add');
Route::post('/add-supervisor', 'Admin\SupervisorController@store');
// super visor