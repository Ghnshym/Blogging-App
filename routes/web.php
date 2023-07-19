<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [BlogPostController::class, 'index'])->name('home');
Route::get('/', [BlogPostController::class, 'list'])->name('home');

Route::get('/posts/{post}', [BlogPostController::class, 'show'])->name('posts.show');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Blog Post Routes
Route::middleware('auth')->group(function () {
    Route::get('/create', [BlogPostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [BlogPostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [BlogPostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [BlogPostController::class, 'destroy'])->name('posts.destroy');

    // Comment Routes
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
});
