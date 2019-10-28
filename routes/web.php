<?php

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'FolderController@create');
Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'TaskController@create');
Route::get('/folders/1/tasks/edit', 'TaskController@showEditForm')->name('tasks.edit');
Route::post('/folders/1/tasks/edit', 'TaskController@edit');
