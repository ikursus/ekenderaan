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
Route::get('/dashboard', DashboardController::class);
// Route::get(uri, callback);

// Halaman Senarai Users ('/users')
Route::get('/users', [UserController::class, 'getSenaraiUsers']);
// Routing untuk memaparkan borang daftar user
Route::get('/users/new', [UserController::class, 'paparBorangUserBaru']);
// Routing untuk menyimpan rekod daftar user baru
Route::post('/users/new', [UserController::class, 'simpanRekodUserBaru']);
// Routing untuk memaparkan detail user
Route::get('/users/{id}', [UserController::class, 'paparDetailUser']);
// Routing untuk memaparkan borang kemaskini rekod user
Route::get('/users/{id}/edit', [UserController::class, 'paparBorangEditUser']);
// Routing untuk menyimpan rekod kemaskini user
Route::patch('/users/{id}/edit', [UserController::class, 'simpanRekodEditUser']);
// Routing untuk menghapuskan rekod user
Route::delete('/users/{id}', [UserController::class, 'deleteRekodUser']);




// Routing untuk tempahan kenderaan

// Bahagian admin
// Routing pengurusan tempahan kenderaan
