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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>'admin'],function (){
    Route::get('admin',function () {
        return view('admin.index');
    });
    Route::resource('admin/users','AdminUsersController');

    Route::resource('admin/task','AdminTaskController');

    Route::resource('admin/task/task-level','AdminLevel');
    Route::get('admin/task/{task_id}/task-level/create','AdminLevel@create');
    Route::get('admin/task/{task_id}/task-level/{id}','AdminLevel@edit');


    Route::resource('admin/task/test','TaskTestController');
    Route::get('admin/task/{task_id}/task-level/{level_id}/test/create','TaskTestController@create');
    Route::get('admin/task/{task_id}/task-level/{level_id}/test/{id}','TaskTestController@edit');


});

Route::resource('/solution','SolutionController');
Route::resource('/solution-code','UserCodeController');

Route::get('/solution/{solution_id}/level/{level_id}','SolutionLevel@index');
Route::get('/solution/{solution_id}/level/{level_id}/code/{code_id}','UserCodeController@show');
Route::get('/solution/{solution_id}/level/{level_id}/build','SolutionLevel@build');
Route::resource('/solution-test','UserTestController');
Route::get('/solution/{solution_id}/level/{level_id}/test/create','UserTestController@create');
Route::get('/solution/{solution_id}/level/{level_id}/test/{test_id}','UserTestController@show');


