<?php
Route::get('/', function () {
   
    return view('child');
});

Route::get('tasks', 'TaskController@index');