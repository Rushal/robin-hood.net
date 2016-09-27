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

Route::get('/', 'PagesController@index');
Route::get('how-it-works', 'PagesController@howitworks');
Route::get('history', 'PagesController@history');
Route::get('bookkeeping', 'TransactionsController@index');

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@sendContactEmail');

Route::get('chest-click', function () {
    return view('chest-click');
});

Auth::routes();

Route::get('/importExport', 'ImportBookkeepingController@importExport');
Route::get('/downloadExcel/{type}', 'ImportBookkeepingController@downloadExcel');
Route::post('/importExcel', 'ImportBookkeepingController@importExcel');
