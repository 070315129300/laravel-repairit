<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact'])->middleware('alreadyLoggedIn');
Route::get('/services', [HomeController::class, 'services'])->middleware('alreadyLoggedIn');
Route::get('/signup', [HomeController::class, 'signup'])->middleware('alreadyLoggedIn');
Route::get('/login', [HomeController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('dashboard.dashboard', [HomeController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[HomeController::class,'logout']);
Route::post('/signupuser',[HomeController::class,'signupUser'])->name('signupuser');
Route::post('/loginuser',[HomeController::class,'loginUser'])->name('loginuser');
