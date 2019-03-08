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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->   name('home');

Route::get('/admin', 'UserController@admin')->   name('admin');

Route::get('/get_add_user', 'UserController@get_add_user')->   name('get_add_user');

Route::post('/add_user', 'UserController@add_user')->   name('add_user');

Route::get('/user', 'UserController@list_user')->   name('list_user');

Route::get('/delete/{id}', 'UserController@delete_user')->   name('delete_user');

Route::get('/edit/{id}', 'UserController@get_edit_user')->   name('get_edit_user');

Route::post('/edit', 'UserController@edit_user')->   name('edit');