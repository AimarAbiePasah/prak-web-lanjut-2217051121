<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman utama (List User)
Route::get('/', [UserController::class, 'index'])->name('user.list');

// Menampilkan profil berdasarkan nama, kelas, npm (route dinamis)
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);

// Halaman profil user (umum, tanpa parameter)
Route::get('/user/profile', [UserController::class,'profile'])->name('user.profile');

// Form untuk membuat user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Menyimpan data user (proses form)
Route::post('/user/store', [UserController::class,'store'])->name('user.store');

// Edit user (halaman form untuk edit user)
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

// Update data user (submit data update user)
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

// Hapus user
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// Menampilkan detail user berdasarkan ID
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
