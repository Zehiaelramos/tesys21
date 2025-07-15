<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tasks', 'App\Http\Controllers\TaskController@index');
Route::get('/tasks/{id}', 'App\Http\Controllers\TaskController@show');
Route::post('/tasks', 'App\Http\Controllers\TaskController@store');
Route::put('/tasks/{id}', 'App\Http\Controllers\TaskController@update');
Route::delete('/tasks/{id}', 'App\Http\Controllers\TaskController@destroy');
