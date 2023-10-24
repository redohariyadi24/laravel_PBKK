<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //Metode ini akan menampilkan daftar kategori
    public function index(){
        // Mengambil semua produk dari model 'Kategori'
        $kategoris = Kategori::all();
        // Menampilkan tampilan 'kategori.kategori' dengan data kategori yang diambil.
        return view('kategori.kategori', ['kategoris' => $kategoris]);
    }

    // Metode ini akan menampilkan formulir untuk menambahkan produk baru.
    public function tambah(){
        // Menampilkan tampilan 'kategori.tambah'.
        return view('kategori.tambah');
    }

    // Metode ini digunakan untuk menampilkan formulir edit kategori.
    public function edit(Kategori $kategori){
        // Menampilkan tampilan 'kategori.edit' dengan data kategori yang akan diedit.
        return view('kategori.edit', ['kategori' => $kategori]);
    }
    
    // Metode ini digunakan untuk menyimpan kategori baru ke database.
    public function simpan(Request $request){
        // Validasi data input dari permintaan HTTP menggunakan aturan tertentu.
        $data = $request->validate([
            'nama_kategori' => 'required',      
        ]);
        // Membuat kategori baru dalam database menggunakan data yang diterima dari permintaan HTTP.
        $newKategori = Kategori::create($data);
        // Mengarahkan pengguna kembali ke halaman daftar kategori setelah kategori berhasil disimpan.
        return redirect(route('kategori.index'));
    }

    // Metode ini digunakan untuk memperbarui kategori yang ada dalam database.
    public function update(Kategori $kategori, Request $request){
        // Validasi data input dari permintaan HTTP menggunakan aturan tertentu.
        $data = $request->validate([
            'nama_kategori' => 'required',      
        ]);
        // Memperbarui data kategori yang ada dalam database dengan data yang diterima dari permintaan HTTP.
        $kategori->update($data);
        // Mengarahkan pengguna kembali ke halaman daftar kategori dengan pesan sukses.
        return redirect(route('kategori.index'))->with('success', 'Data Produk Telah Berhasil di Update');
    }

    // Metode ini digunakan untuk menghapus kategori dari database.
    public function hapus(Kategori $kategori){
        // Menghapus kategori dari database.
        $kategori->delete();
        // Mengarahkan pengguna kembali ke halaman daftar kategori dengan pesan sukses.
        return redirect(route('kategori.index'))->with('success', 'Data Produk Telah Berhasil di Hapus');
    }


}
