<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/pages', [HomeController::class, 'pages'])->name('pages');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/book-table', [HomeController::class, 'booking'])->name('book-table')->middleware('auth');

Route::get('/profile', [UserController::class, "profile"])->name('profile')->middleware('auth');

Route::get('/profile/{id}/edit', [UserController::class, "edit"])->name('profile.edit')->middleware('auth');

Route::put('/profile/{id}', [UserController::class, "update"])->name('profile.update')->middleware('auth');

Route::post('/book-table', [UserController::class, 'bookTable'])->name('book-table')->middleware('auth');

Route::get('/mybooking', [UserController::class, "myBookings"])->name('profile.mybooking')->middleware('auth');

// Authentication

Route::get('/register' , [RegisterController::class, "register"])->name('register');

Route::post('/register', [RegisterController::class, "handle_register"])->name('register');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'handle_login'])->name('login');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');