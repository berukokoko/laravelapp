<?php
 use App\Http\Middleware\HelloMiddleware;


// Route::get('hello/del','HelloController@del');
// Route::post('hello/del','HelloController@remove');

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@index');
//Route::get('hello/show','HelloController@show');

// Route::get('hello/add','HelloController@add');
// Route::post('hello/add','HelloController@create');

//Route::get('hello/edit','HelloController@edit');
//Route::post('hello/edit','HelloController@edit');

Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');
