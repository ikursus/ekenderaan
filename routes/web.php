<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Halaman Utama Aplikasi ('/')
Route::get('/', function() {
    return view('welcome');
});

// Halaman Login ('/login')
Route::get('/login', [LoginController::class, 'paparkanBorangLogin']);
// Route untuk terima data daripada borang login
Route::post('/login', [LoginController::class, 'dapatkanDataLogin']);

// Halaman Dashboard ('/dashboard')
Route::get('/ruangan-ahli-yang-baru', DashboardController::class)->name('gelaran.dashboard');
// Route::get(uri, callback);

// Halaman Senarai Users ('/users')
Route::get('/users', [UserController::class, 'getSenaraiUsers'])->name('users.getSenaraiUsers'); // users.index
// Routing untuk memaparkan borang daftar user
Route::get('/users/new', [UserController::class, 'paparBorangUserBaru'])->name('users.paparBorangUserBaru'); // users.create
// Routing untuk menyimpan rekod daftar user baru
Route::post('/users/new', [UserController::class, 'simpanRekodUserBaru'])->name('users.simpanRekodUserBaru'); // users.store
// Routing untuk memaparkan detail user
Route::get('/users/{id}', [UserController::class, 'paparDetailUser'])->name('users.paparDetailUser'); // users.show
// Routing untuk memaparkan borang kemaskini rekod user
Route::get('/users/{id}/edit', [UserController::class, 'paparBorangEditUser'])->name('users.paparBorangEditUser'); // users.edit
// Routing untuk menyimpan rekod kemaskini user
Route::patch('/users/{id}/edit', [UserController::class, 'simpanRekodEditUser'])->name('users.simpanRekodEditUser'); // users.update
// Routing untuk menghapuskan rekod user
Route::delete('/users/{id}', [UserController::class, 'deleteRekodUser'])->name('users.deleteRekodUser'); // users.destroy




// Routing untuk tempahan kenderaan

// Bahagian admin
// Routing pengurusan tempahan kenderaan
