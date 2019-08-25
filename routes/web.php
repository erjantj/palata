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

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contacts', 'PageController@contacts');
Route::post('/contacts/callback', 'PageController@callback');

Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@show');

Route::get('/lawyers', 'LawyerController@index');
Route::get('/lawyers/{news}', 'LawyerController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
