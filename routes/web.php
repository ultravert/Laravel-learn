<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
//Следующая строка аналогична коду выше
Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/');

Route::get('/test', TestController::class)->name('test');
Route::redirect('/test2', '/test')->name('test')->middleware('token');

Route::middleware('guest')->group(function () {
    //страница регистрации пользователя
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
//страница входа пользователя
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

//CRUD
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//
//Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//
//Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//
//Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//
//Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//
//Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy ');
//
//Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

//Аналогично методам выше, кроме лайк
//Route::resource('/posts', PostController::class);

Route::resource('/posts/{post}/comments', CommentController::class)->only([
    'edit',
]);

//Вместо 404, должен находиться в самом низу. Редко используется.
//Route::fallback(function () {
//    return 'Fallback';
//});
