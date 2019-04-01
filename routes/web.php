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

// informative pages
Route::get('/', 'PagesController@home');
Route::get('/profile', 'PagesController@profile');

// assignments - crud page
Route::resource('/assignments', 'AssignmentsController');
Route::get('/assignments/create', 'AssignmentsController@create');
Route::get('/assignments/{assignment}', 'AssignmentsController@show');
Route::get('/assignments/{assignment}/edit', 'AssignmentsController@edit');
Route::patch('/assignments/{assignment}', 'AssignmentsController@update');
Route::delete('/assignments/{assignment}', 'AssignmentsController@destroy');
Route::post('/assignments', 'AssignmentsController@store');

// grades - crud page
Route::resource('/grades', 'GradesController');
Route::get('/grades/create', 'GradesController@create');
Route::get('/grades/{grade}', 'GradesController@show');
Route::get('/grades/{grade}/edit', 'GradesController@edit');
Route::patch('/grades/{grade}', 'GradesController@update');
Route::delete('/grades/{grade}', 'GradesController@destroy');
Route::post('/grades', 'GradesController@store');
