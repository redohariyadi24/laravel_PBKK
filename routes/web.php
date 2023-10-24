<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini akan dimuat oleh RouteServiceProvider dalam sebuah grup yang
| berisi middleware grup "web". Sekarang buatlah sesuatu yang hebat!
|
*/

Route::get('/', function () {
    return view('welcome'); // Mengembalikan view 'welcome' saat URL root ('/') diakses.
});

Route::get('/home', function () {
    return view('home'); // Mengembalikan view 'home' saat URL '/home' diakses.
});

Route::get('/login', function () {
    return view('login'); // Mengembalikan view 'login' saat URL '/login' diakses.
});

Route::get('/registration', function () {
    return view('registration'); // Mengembalikan view 'registration' saat URL '/registration' diakses.
});


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
// Rute HTTP GET untuk menampilkan daftar produk ketika pengguna mengakses URL '/produk' 

Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
// Rute HTTP GET untuk menampilkan form tambah produk ketika pengguna mengakses URL '/produk/tambah' 

Route::post('/produk', [ProdukController::class, 'simpan'])->name('produk.simpan');
// Rute HTTP POST untuk menyimpan produk baru.

Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
// Rute HTTP GET untuk menampilkan formulir edit produk.

Route::put('/produk/{produk}/update', [ProdukController::class, 'update'])->name('produk.update');
// Rute HTTP PUT untuk memperbarui data produk.

Route::delete('/produk/{produk}/hapus', [ProdukController::class, 'hapus'])->name('produk.hapus');
// Rute HTTP DELETE untuk menghapus data produk.

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
// Rute HTTP GET untuk menampilkan daftar kategori ketika pengguna mengakses URL '/kategori' 

Route::get('/kategori/tambah', [KategoriController::class, 'tambah'])->name('kategori.tambah');
// Rute HTTP GET untuk menampilkan form tambah kategori ketika pengguna mengakses URL '/kategori/tambah' 

Route::post('/kategori', [KategoriController::class, 'simpan'])->name('kategori.simpan');
// Rute HTTP POST untuk menyimpan kategori baru.

Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
// Rute HTTP GET untuk menampilkan formulir edit kategori.

Route::put('/kategori/{kategori}/update', [KategoriController::class, 'update'])->name('kategori.update');
// Rute HTTP PUT untuk memperbarui data kategori.

Route::delete('/kategori/{kategori}/hapus', [KategoriController::class, 'hapus'])->name('kategori.hapus');
// Rute HTTP DELETE untuk menghapus data kategori.