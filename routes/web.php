<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/google4dcb1a76f24b31dd.html', function () {
    return view('google4dcb1a76f24b31dd');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function()
{
    return 'Hello World';
});


/* my */

Route::get('/javascripttimer',function(){
  return view('javascripttimer');
});


Route::get('/get',function(){
  return view('ajaxGet');
});

Route::get('/db',function(){
  return view('db');
});

Route::get('/graph',function(){
  return view('graph');
});

Route::get('/reference',function(){
  return view('reference');
});

Route::get('/contacts',function(){
  return view('contacts');
});

Route::get ('/read',    'AjaxController@read');

Route::get ('/db_',    'AjaxController@index');

Route::get ('/getWeather',    'AjaxController@getWeather');

Route::get ('/dbpuship',    'AjaxController@dbpuship');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
