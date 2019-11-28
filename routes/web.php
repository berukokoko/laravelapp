<?php
 use App\Http\Middleware\HelloMiddleware;


Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@create');
