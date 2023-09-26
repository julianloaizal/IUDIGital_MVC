<?php

use App\Http\Controllers\CategorytController;
use App\Http\Controllers\PostController;
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
/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
Route::resource('/dashboard/post', PostController::class);
Route::resource('/dashboard/category', CategorytController::class);
Route::get('/', function () {
    return view('welcome');
});
