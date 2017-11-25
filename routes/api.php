<?php

use Illuminate\Http\Request;

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');