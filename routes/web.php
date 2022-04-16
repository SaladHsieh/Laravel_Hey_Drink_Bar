<?php

use Illuminate\Support\Facades\Route;

// Route::get('/register');

Route::get('/posts', function () {
  return view('posts.index');
});
