<?php

Route::get('/', 'TaskController@index');

Route::get('task/{id}','Taskcontroller@show');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','TaskController@destroy');
