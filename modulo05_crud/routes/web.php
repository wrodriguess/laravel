<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/read', [PostController::class, 'readAll']);
Route::get('/posts/read/{id}', [PostController::class, 'findById']);
