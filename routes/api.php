<?php

use App\Http\Controllers\Api\PostController;
use App\Models\Currency;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('post.like');

//Route::get('/currency', function () {
//    return Currency::first();
//});
