<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog');

Route::get('/post/{slug}', [BlogController::class, 'showPost'])->name('viewPosts');