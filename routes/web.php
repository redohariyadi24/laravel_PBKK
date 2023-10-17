<?php

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
// Rute ini akan mengarahkan permintaan ke metode 'index' dalam kontroler 'ProdukController'.
// Rute diberi nama 'produk.index'

Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
// Rute HTTP GET untuk menampilkan daftar produk ketika pengguna mengakses URL '/produk/tambah' 
// Ketika diakses URL '/produk/tambah' akan mengarahkan  ke metode 'tambah' pada 'ProdukController'.
// Rute diberi nama 'produk.tambah'

// Metode 'tambah' akan menampilkan formulir tambah produk yang memungkinkan pengguna untuk 
// memasukkan data produk baru ke dalam aplikasi.

Route::post('/produk', [ProdukController::class, 'simpan'])->name('produk.simpan');
// Rute HTTP POST untuk menyimpan produk baru.
// Ketika pengguna mengirimkan formulir untuk menambahkan produk baru,
// rute ini akan mengarahkan permintaan POST ke metode 'simpan' dalam kontroler 'ProdukController'.
// Nama rute diberikan sebagai 'produk.simpan',

// Metode 'simpan' akan melakukan validasi data, jika valid akan dibuat entri produk baru
// Setelah berhasil menyimpan data produk, pengguna akan diarahkan kembali ke halaman daftar produk.


Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
// Rute HTTP GET untuk menampilkan formulir edit produk.
// Ketika pengguna mengakses URL '/produk/{produk}/edit', di mana '{produk}' adalah parameter dinamis,
// rute ini akan mengarahkan permintaan ke metode 'edit' dalam kontroler 'ProdukController'.
// Nama rute diberikan sebagai 'produk.edit'

// Metode 'edit' akan mengambil produk yang sesuai dengan parameter dinamis '{produk}' dari database
// dan menampilkan formulir edit dengan data produk yang akan diedit.


Route::put('/produk/{produk}/update', [ProdukController::class, 'update'])->name('produk.update');
// Rute HTTP PUT untuk memperbarui data produk.
// Ketika pengguna mengirimkan formulir edit produk untuk memperbarui data produk yang ada,
// rute ini akan mengarahkan permintaan PUT ke metode 'update' dalam kontroler 'ProdukController'.
// Nama rute diberikan sebagai 'produk.update'

// Metode 'update' akan melakukan validasi data yang diterima dari formulir edit, kemudian memperbarui 
// data produk yang sesuai dalam database dengan data yang baru.
// Setelah berhasil memperbarui data produk, pengguna akan diarahkan kembali ke halaman daftar produk
// dengan pesan sukses yang menunjukkan bahwa data produk telah berhasil diperbarui.

Route::delete('/produk/{produk}/hapus', [ProdukController::class, 'hapus'])->name('produk.hapus');
// Rute HTTP DELETE untuk menghapus data produk.
// Ketika pengguna mengirimkan permintaan DELETE, 
// rute ini akan mengarahkan ke metode 'hapus' dalam kontroler 'ProdukController'.
// Nama rute diberikan sebagai 'produk.hapus'

// Metode 'hapus' akan menghapus produk yang sesuai dari database.
// Setelah berhasil menghapus produk, pengguna akan diarahkan kembali ke halaman daftar produk.