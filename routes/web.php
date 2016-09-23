<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/how-it-works', function () {
    return view('how-it-works');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/bookkeeping', function () {
    return view('bookkeeping');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/tutorial', 'HomeController@tutorial');

Auth::routes();
