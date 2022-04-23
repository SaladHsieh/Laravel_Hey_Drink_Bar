<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// auth
// index is the method we want to call
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// order
// Jump to OrderList
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order', [OrderController::class, 'store']);
