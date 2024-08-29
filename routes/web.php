<?php

use App\Models\Tempahan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TempahanController;

// Halaman Utama Aplikasi ('/')
Route::get('/', function() {
    return view('welcome');
});

// Halaman Login ('/login')
Route::get('/login', [LoginController::class, 'paparkanBorangLogin'])->name('login');
// Route untuk terima data daripada borang login
Route::post('/login', [LoginController::class, 'dapatkanDataLogin'])->name('login.authenticate');
// Route untuk logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman Dashboard ('/dashboard')
Route::get('/dashboard', DashboardController::class)->name('gelaran.dashboard');
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





// Route::get('/tempahan', [TempahanController::class, 'index'])->name('tempahan.index');
// Route::get('/tempahan/create', [TempahanController::class, 'create'])->name('tempahan.create');
// Route::post('/tempahan', [TempahanController::class, 'store'])->name('tempahan.store');
// Route::get('/tempahan/{id}', [TempahanController::class, 'show'])->name('tempahan.show');
// Route::get('/tempahan/{id}/edit', [TempahanController::class, 'edit'])->name('tempahan.edit');
// Route::patch('/tempahan/{id}', [TempahanController::class, 'update'])->name('tempahan.update');
// Route::delete('/tempahan/{id}', [TempahanController::class, 'destroy'])->name('tempahan.destroy');

Route::resource('/tempahan', TempahanController::class);


















// Routing untuk tempahan kenderaan

// Bahagian admin
// Routing pengurusan tempahan kenderaan
