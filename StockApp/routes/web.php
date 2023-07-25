<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('categories', 'App\Http\Controllers\CategoryController')->middleware('auth');

Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->middleware('auth');

Route::get('/products', 'App\Http\Controllers\ProductController@index');

