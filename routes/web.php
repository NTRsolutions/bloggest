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

Route::get('/', 'PostsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}', 'PostsController@show');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::namespace('admin')->prefix('admin')->group(function (){
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    });
});