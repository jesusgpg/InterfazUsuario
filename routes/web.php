<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Usuario comun
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/perfil/{id}', [UserController::class, 'show'])->name('perfil');
Route::get('/perfil', [UserController::class, 'show'])->name('perfil');
// Route::put('/perfil', [UserController::class, 'edit'])->name('perfil.edit');
// Route::put('/perfil', [UserController::class, 'edit'])->name('perfil');

// ADMIN
Route::get('/admin', [UserController::class, 'index'])->name('admin');
Route::get('/admin/usuarios', [UserController::class, 'showall'])->name('usuarios');
Route::get('/admin/usuarios/{user}/edit', [UserController::class, 'showid'])->name('usuarios.show');

Route::put('/admin/{user}/', [UserController::class, 'update'])->name('usuarios.update');

Route::get('/admin/usuarios/create', [UserController::class, 'create'])->name('admin.usernew');
Route::post('/admin/usuarios/create', [UserController::class, 'store'])->name('admin.usernew.store');
// Route::post('/admin/usuarios/{id}/edit'', [UserController::class, 'store'])->name('perfil.store');
