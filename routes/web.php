<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

// Route::get('/posts', function () {
//     return view('index.posts', [
//         'title' => "posts",
//     ]);
// });

// Route::get('/lol', function () {
//     return view('index.master.a', [
//         'title' => 'master',
//     ]);
// });

Route::resource('posts', PostsController::class);
Route::resource('home', HomeController::class);
Route::resource('lol', MasterController::class);
