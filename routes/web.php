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


Route::get('/admin', function () {
    return view('admin.main');
});
Route::prefix('/admin')->group(function(){
    Route::get('/video/create', 'VideosController@createform');
    Route::post('/video/create', 'VideosController@create');
});


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
