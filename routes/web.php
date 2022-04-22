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

// TODO: order
// TODO: 缺 Order Title & 上傳 Menu
// 結束跳轉到 OrderList 頁面
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order', [OrderController::class, 'store']);

// Task example
Route::get('/task', function () {
  return view('task');
})->name('task');
Route::post('/task', function (Request $request) {
  // dd($request);
  $request->validate([
    'item' => 'required|string',
    'ice' => 'required|string',
    'sugar' => 'required|string',
    'qty' => 'required|numeric',
    'note' => 'nullable|string',
  ]);

  $qty = count($request->qty);
  for ($i = 0; $i < $qty; $i++) {
    $task = new Task();
    $task->item = $request->item[$i];
    $task->ice = $request->ice[$i];
    $task->sugar = $request->sugar[$i];
    $task->qty = $request->qty[$i];
    $task->note = $request->note[$i];
    $task->save();
  }

  return redirect()->back();
});

Route::get(
  '/posts',
  function () {
    return view('posts.index');
  }
);
