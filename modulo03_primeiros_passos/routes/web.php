<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'exit']);

Route::get('/usuarios/{qtd}', [UsuarioController::class, 'users']);
