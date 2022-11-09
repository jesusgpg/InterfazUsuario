<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('admin', [App\Http\Controllers\UserController::class, 'index'])->name('admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/usuarios', [UserController::class, 'show']);

// Route::get('/settings', [UserController::class, 'show']);
