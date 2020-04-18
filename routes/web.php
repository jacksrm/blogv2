<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Posts@index')->name('home');

Route::get('create-post', 'Posts@create')->name('create-post');

Route::resource('post', 'Posts');
Route::resource('user', 'Users');