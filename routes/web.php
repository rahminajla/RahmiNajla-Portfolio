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
Route::get('/', [UserController::class, 'Home'])->name('main');
Route::get('/main', [UserController::class, 'Home'])->name('main');
// about page
Route::get('/main#about', [UserController::class, 'About'])->name('main');
// contact page
Route::get('/main#contact', [UserController::class, 'Contact'])->name('main');