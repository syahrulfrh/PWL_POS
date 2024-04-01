<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Models\KategoriModel;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level',[LevelController::class,'index']);

Route::get('/kategori',[KategoriController::class,'index']);

Route::get('/user',[UserController::class,'index']);

Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');

Route::get('/user/ubah/{id}', [User::class, 'ubah'])->name('/user/ubah');

Route::get('/user/hapus/{id}', [User::class, 'hapus'])->name('/user/hapus');

Route::get('/user',[UserController::class,'index'])->name('/user');

Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan'])->name('/user/tambah_simpan');

Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan'])->name('/user/ubah_simpan');

Route::get('/kategori',[KategoriController::class,'index']);

Route::get('/kategori/create',[KategoriController::class,'create']);

Route::post('/kategori',[KategoriController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TUGAS PRAKTIKUM JOBSHEET 5
Route::get('/kategori/create',[KategoriController::class,'create'])->name('/kategori/create');
Route::post('/kategori',[KategoriController::class,'store'])->name('/kategori');

Route::get('/kategori/edit/{id}',[KategoriController::class,'edit'])->name('kategori.edit');
Route::get('/kategori/edit_save/{id}',[KategoriController::class,'edit_save'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('/kategori/hapus');