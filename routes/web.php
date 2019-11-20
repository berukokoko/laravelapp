<?php
 use App\Http\Middleware\HelloMiddleware;


Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');
