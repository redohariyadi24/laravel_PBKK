<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //Metode ini akan menampilkan daftar produk.
    public function index(){
        // Mengambil semua produk dari model 'Produk'.
        $produks = Produk::all();
        // Menampilkan tampilan 'produk.produk' dengan data produk yang diambil.
        return view('produk.produk', ['produks' => $produks]);
    }

    // Metode ini akan menampilkan formulir untuk menambahkan produk baru.
    public function tambah(){
        // Menampilkan tampilan 'produk.tambah'.
        return view('produk.tambah');
    }

    // Metode ini digunakan untuk menyimpan produk baru ke database.
    public function simpan(Request $request){
        // Validasi data input dari permintaan HTTP menggunakan aturan tertentu.
        $data = $request->validate([
            'nama' => 'required',       // Nama produk harus diisi (wajib).
            'artis' => 'required',      // Nama artis harus diisi (wajib).
            'kategori' => 'required',   // Kategori harus diisi (wajib).
            'stok' => 'required|numeric', // Stok harus diisi dan harus berupa angka (wajib dan numeric).
            'harga' => 'required|numeric', // Harga harus diisi dan harus berupa angka (wajib dan numeric).
            'deskripsi' => 'nullable'   // Deskripsi bersifat opsional (boleh kosong).
        ]);
        // Membuat produk baru dalam database menggunakan data yang diterima dari permintaan HTTP.
        $newProduk = Produk::create($data);
        // Mengarahkan pengguna kembali ke halaman daftar produk setelah produk berhasil disimpan.
        return redirect(route('produk.index'));
    }

    // Metode ini digunakan untuk menampilkan formulir edit produk.
    public function edit(Produk $produk){
        // Menampilkan tampilan 'produk.edit' dengan data produk yang akan diedit.
        return view('produk.edit', ['produk' => $produk]);
    }

    // Metode ini digunakan untuk memperbarui produk yang ada dalam database.
    public function update(Produk $produk, Request $request){
        // Validasi data input dari permintaan HTTP menggunakan aturan tertentu.
        $data = $request->validate([
            'nama' => 'required',       // Nama produk harus diisi (wajib).
            'artis' => 'required',      // Nama artis harus diisi (wajib).
            'kategori' => 'required',   // Kategori harus diisi (wajib).
            'stok' => 'required|numeric', // Stok harus diisi dan harus berupa angka (wajib dan numeric).
            'harga' => 'required|numeric', // Harga harus diisi dan harus berupa angka (wajib dan numeric).
            'deskripsi' => 'nullable'   // Deskripsi bersifat opsional (boleh kosong).
        ]);

        // Memperbarui data produk yang ada dalam database dengan data yang diterima dari permintaan HTTP.
        $produk->update($data);
        // Mengarahkan pengguna kembali ke halaman daftar produk dengan pesan sukses.
        return redirect(route('produk.index'))->with('success', 'Data Produk Telah Berhasil di Update');
    }

    // Metode ini digunakan untuk menghapus produk dari database.
    public function hapus(Produk $produk){
        // Menghapus produk dari database.
        $produk->delete();
        // Mengarahkan pengguna kembali ke halaman daftar produk dengan pesan sukses.
        return redirect(route('produk.index'))->with('success', 'Data Produk Telah Berhasil di Hapus');
    }
}

