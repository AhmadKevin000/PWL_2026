<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::get('/', [HomeController::class]);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', [WorldController::class]);

Route::get('/about', [AboutController::class]);

Route::get('/user/{name?}', [UserController::class]);

Route::get('/posts/{post}/comments/{comment}', [CommentController::class]);

Route::get('/articles/{id}', [ArticleController::class]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);

