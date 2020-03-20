<?php
Route::get('/', function () {
   
    return view('child');
});

Route::get('tasks', 'TaskController@index');
Route::get('task/{id}','Taskcontroller@show');