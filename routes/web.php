<?php
 use App\Http\Middleware\HelloMiddleware;


// Route::get('hello/del','HelloController@del');
// Route::post('hello/del','HelloController@remove');

//Route::get('hello','HelloController@index');

Route::get('hello/show','HelloController@show');
