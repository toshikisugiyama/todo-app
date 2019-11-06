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


Route::get('folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/folders/create', 'FolderController@create')->name('folders.create');
Route::post('/folders/create', 'FolderController@store');
Route::get('/folders/{id}/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'TaskController@store');
Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit')->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@update');
Route::get('/folders/{id}/tasks/{task_id}/delete', 'TaskController@destroy')->name('tasks.delete');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
