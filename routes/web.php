<?php

use Illuminate\Support\Facades\Route;




Route::get('/','TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','Taskcontroller@destroy');

Route::put('edit/{id}','Taskcontroller@edit');

Route::patch('update/{id}','TaskController@Update');