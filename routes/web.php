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

Route::get('/', 'UserController@index')->name('home');

Auth::routes();
Route::redirect('/register', '/login', 301);

Route::post('/user/update/access-rights', 'UserController@updateAccessRights')->name('user.update.access_rights');
