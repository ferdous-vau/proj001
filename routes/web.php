<?php



Route::group(['middleware' => 'auth'],function(){
    Route::get('/', 'AdminController@dashboard');
    Route::get('/profile', 'Profile\ProfileController@profile');

    Route::group(['middleware' => 'admin'],function(){
        
    Route::get('/third-year-project', 'Admin\Third_Year_propoalController@third_project');
    Route::post('/third-year-project/multiple/delete', 'Admin\Third_Year_propoalController@multipl_delete');

    Route::get('/final-year-project', 'Admin\Final_Year_propoalController@final_project');


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
    Route::get('/view-project/{id}', 'Admin\Final_Year_propoalController@view_project');
    Route::post('/supervisor-assign', 'Admin\Third_Year_propoalController@supervisor_assign');
    Route::post('/schedule-assign', 'Admin\Third_Year_propoalController@schedule');


    });
    Route::group(['middleware' => 'supervisor'],function(){

        Route::get('/supervisor-third-year-project', 'Supervisor\supervisorController@third_project');
        Route::get('/supervisor-final-year-project', 'Supervisor\supervisorController@final_project');
        Route::get('/supervisor-view-project/{id}', 'Supervisor\supervisorController@view_project');

    });

});




//student panel//
Route::get('/student-form','Admin\StudentController@student');

Route::get('/view-proposal', 'AdminController@view_proposal');
//student panel//


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error', 'AdminController@error');






Route::post('/proposal', 'ProposalController@store');
Route::get('/submitted', 'AdminController@after_submit');



















