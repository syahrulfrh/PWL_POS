<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Models\KategoriModel;
use App\Http\Controllers\POSController;
use App\Http\Controllers\welcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level',[LevelController::class,'index']);

// Route::get('/kategori',[KategoriController::class,'index']);

// Route::get('/user',[UserController::class,'index']);

// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');

// Route::get('/user/ubah/{id}', [User::class, 'ubah'])->name('/user/ubah');

// Route::get('/user/hapus/{id}', [User::class, 'hapus'])->name('/user/hapus');

// Route::get('/user',[UserController::class,'index'])->name('/user');

// Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan'])->name('/user/tambah_simpan');

// Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan'])->name('/user/ubah_simpan');

// Route::get('/kategori',[KategoriController::class,'index']);

// Route::get('/kategori/create',[KategoriController::class,'create']);

// Route::post('/kategori',[KategoriController::class,'store']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // TUGAS PRAKTIKUM JOBSHEET 5
// Route::get('/kategori/create',[KategoriController::class,'create'])->name('/kategori/create');
// Route::post('/kategori',[KategoriController::class,'store'])->name('/kategori');

// Route::get('/kategori/edit/{id}',[KategoriController::class,'edit'])->name('kategori.edit');
// Route::get('/kategori/edit_save/{id}',[KategoriController::class,'edit_save'])->name('kategori.update');
// Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('/kategori/hapus');

// Route::get('/user/create', function(){
//     return view('user.create');
// });
// Route::get('/level/create', function(){
//     return view('level.create');
// });

// //Route::get('/user/update', [UserController::class, 'update'])->name('/user/update');
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
// Route::post('/level', [LevelController::class, 'create_save']);

// //
// Route::get('/level/update', [LevelController::class, 'update'])->name('/level/update');
// Route::get('/user/create', [User::class, 'create'])->name('/user/create');
// Route::get('/user/update', [User::class, 'update'])->name('/user/update');
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
// Route::post('/level', [LevelController::class, 'create_save']);

// Route::resource('m_user',POSController::class);

Route::get('/',[welcomeController::class,'index']);

Route::group (['prefix' =>'user'],function(){
    Route::get('/',[user::class,'index']);
    Route::post('/list',[user::class,'list']);
    Route::get('/create',[user::class,'create']);
    Route::post('/',[user::class,'store']);
    Route::get('/{id}',[user::class,'show']);
    Route::get('/{id}/edit',[user::class,'edit']);
    Route::put('/{id}',[user::class,'update']);
    Route::delete('/{id}',[user::class,'destroy']);

});