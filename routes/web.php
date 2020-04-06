<?php
 use App\Http\Middleware\HelloMiddleware;


// Route::get('hello/del','HelloController@del');
// Route::post('hello/del','HelloController@remove');
//
Route::get('hello','HelloController@index');
Route::post('hello','HelloController@index');
//Route::get('hello/show','HelloController@show');

// Route::get('hello/add','HelloController@add');
// Route::post('hello/add','HelloController@create');

//Route::get('hello/edit','HelloController@edit');
//Route::post('hello/edit','HelloController@edit');

// Route::get('hello/edit','HelloController@edit');
// Route::post('hello/edit','HelloController@update');

 Route::get('person','PersonController@index');

 Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');


Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');

Route::get('person/edit','PersonController@edit');
Route::post('person/edit','PersonController@update');


Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');
//
 Route::get('board','BoardController@index');
//
Route::get('board/add','BoardController@add');
Route::post('board/add','BoardController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('hello','HelloController@index')
->middleware('auth');


Route::get('hello/auth','HelloController@getAuth');
Route::post('hello/auth','HelloController@postAuth');
