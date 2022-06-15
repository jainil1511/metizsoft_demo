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

// Route::get('/', function () {
//     return view();
// });
Route::get('/', 'App\Http\Controllers\UserController@login')->name('login');
Route::post('login_process', 'App\Http\Controllers\UserController@login_process')->name('login_process');
Route::get('/register', 'App\Http\Controllers\UserController@register')->name('register');
Route::post('register_process', 'App\Http\Controllers\UserController@register_process')->name('register_process');