<?php


Route::get('/', 'AdminController@home')->middleware('auth');

//proposal//
Route::get('/third-year-project', 'AdminController@third_project');
Route::get('/final-year-project', 'AdminController@final_project');
//proposal//


// super visor
Route::get('/supervisor-list', 'Admin\SupervisorController@list');
Route::get('/add-supervisor', 'Admin\SupervisorController@add');
Route::post('/add-supervisor', 'Admin\SupervisorController@store');
Route::get('/delete/{id}', 'Admin\SupervisorController@delete');
Route::get('/edit/{id}', 'Admin\SupervisorController@edit');
Route::post('/update-supervisor', 'Admin\SupervisorController@update');
// super visor


//students//
Route::get('/third-year-students', 'AdminController@third_student');
Route::get('/final-year-students', 'AdminController@final_student');
//students//

//schedule//
Route::get('/third-year-schedule', 'AdminController@third_schedule');
Route::get('/final-year-schedule', 'AdminController@final_schedule');
//schedule//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//student panel//
Route::get('/student-form','student\StudentController@student');
//student panel//

















