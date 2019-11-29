<?php
 use App\Http\Middleware\HelloMiddleware;


Route::get('hello/del','HelloController@del');
Route::post('hello/del','HelloController@remove');
