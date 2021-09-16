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
Route::get('/', 'VideosFrontController@index');
Route::get('/detail/{id}', 'VideosFrontController@detail');
Route::get('/bytype/{type}', 'VideosFrontController@bytype');
Route::get('/freebeats', 'VideosFrontController@freebeats');
Route::get('/contact', 'VideosFrontController@contact');


Route::get('/admin', function () {
    return view('admin.main');
});
Route::prefix('/admin')->group(function(){
    Route::get('/video/create', 'VideosController@createform');
    Route::get('/video/list', 'VideosController@list');
    Route::post('/video/create', 'VideosController@create');
    Route::post('/video/delete', 'VideosController@delete');
});


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
