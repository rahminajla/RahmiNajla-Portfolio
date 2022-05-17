<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// home page
Route::get('/', [UserController::class, 'Home'])->name('home');
Route::get('/home', [UserController::class, 'Home'])->name('home');
// about page
Route::get('/about', [UserController::class, 'About'])->name('about');
// contact page
Route::get('/contact', [UserController::class, 'Contact'])->name('contact');