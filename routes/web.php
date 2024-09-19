<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create_post', function () {
    return view('create_post');
});

// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts', [PostController::class, 'index']);

Route::resource('posts', PostController::class);