<?php







Route::group(['middleware' => 'auth'],function(){
    Route::get('/', 'AdminController@home');

    Route::group(['middleware' => 'admin'],function(){
        
    Route::get('admin/dashboard', 'AdminController@dashboard');
    Route::get('/third-year-project', 'AdminController@third_project');
    Route::get('/final-year-project', 'AdminController@final_project');
    Route::get('/supervisor-list', 'Admin\SupervisorController@list');
    Route::get('/add-supervisor', 'Admin\SupervisorController@add');
    Route::post('/add-supervisor', 'Admin\SupervisorController@store');
    Route::get('/delete-supervisor/{id}', 'Admin\SupervisorController@delete');
    Route::get('/edit/{id}', 'Admin\SupervisorController@edit');
    Route::post('/update-supervisor', 'Admin\SupervisorController@update');
    Route::get('/third-year-students', 'Admin\StudentController@third_student');
    Route::get('/final-year-students', 'Admin\StudentController@final_student');
    Route::get('/delete-student/{id}', 'Admin\StudentController@delete');
    Route::get('/third-year-schedule', 'AdminController@third_schedule');
    Route::get('/final-year-schedule', 'AdminController@final_schedule');


    });
    Route::group(['middleware' => 'supervisor'],function(){
        Route::get('supervisor/dashboard', 'AdminController@super_dashboard');

    });
    
});




//student panel//
Route::get('/student-form','Admin\StudentController@student');
Route::get('/student-form-01','Admin\StudentController@student_01');
Route::get('/student-form-02','Admin\StudentController@student_02');
//student panel//



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error', 'AdminController@error');

















