<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProdukController extends Controller
{
    //Metode ini akan menampilkan daftar produk.
    public function index(){
        $produks = Produk::join('kategoris', 'produks.kategori_id', '=', 'kategoris.id')
        ->select('produks.*', 'kategoris.nama_kategori')
        ->get();


        // // Mengambil semua produk dari model 'Produk'.
        // $produks = Produk::all();
        // // $produks = Produk::with('Kategori')->get();
        // // Menampilkan tampilan 'produk.produk' dengan data produk yang diambil.
        return view('produk.produk', ['produks' => $produks]);
    }

    // Metode ini akan menampilkan formulir untuk menambahkan produk baru.
    public function tambah(){
        $data = Kategori::all();
        // Menampilkan tampilan 'produk.tambah'.
        return view('produk.tambah', compact('data'));
    }

    // Metode ini digunakan untuk menyimpan produk baru ke database.
    public function simpan(Request $request){
        // Validasi data input dari permintaan HTTP menggunakan aturan tertentu.
        $data = $request->validate([
            'nama' => 'required',       // Nama produk harus diisi (wajib).
            'artis' => 'required',      // Nama artis harus diisi (wajib).
            'kategori_id' => 'required',   // Kategori harus diisi (wajib).
            'stok' => 'required|numeric', // Stok harus diisi dan harus berupa angka (wajib dan numeric).
            'harga' => 'required|numeric', // Harga harus diisi dan harus berupa angka (wajib dan numeric).
            'deskripsi' => 'nullable',   // Deskripsi bersifat opsional (boleh kosong).
            'gambar' => 'required|mimes:jpeg,jpg,png' //
        ]);

        $gambar_file = $request->file('gambar');
        $gambar_ekstensi = $gambar_file->extension();
        $gambar_nama = date('ymdhis') . "." . $gambar_ekstensi;
        $gambar_file->move(public_path('gambar'),$gambar_nama);

        $data['gambar'] = $gambar_nama;

        // Membuat produk baru dalam database menggunakan data yang diterima dari permintaan HTTP.
        $newProduk = Produk::create($data);

        // Mengarahkan pengguna kembali ke halaman daftar produk setelah produk berhasil disimpan.
        return redirect(route('produk.index'));
    }

    // Metode ini digunakan untuk menampilkan formulir edit produk.
    public function edit(Produk $produk){
        // Mengambil data produk yang akan diedit
        // (seperti yang telah Anda lakukan sebelumnya)

        // Mengambil semua data kategori
        $kategoris = Kategori::all();

        // Menampilkan tampilan 'produk.edit' dengan data produk dan data kategori
        return view('produk.edit', ['produk' => $produk, 'kategoris' => $kategoris]);
    }

    // Metode ini digunakan untuk memperbarui produk yang ada dalam database.
    public function update(Produk $produk, Request $request){

        // Validasi data input dari permintaan HTTP menggunakan aturan tertentu.
        $data = $request->validate([
            'nama' => 'required',       // Nama produk harus diisi (wajib).
            'artis' => 'required',      // Nama artis harus diisi (wajib).
            'kategori_id' => 'required',   // Kategori harus diisi (wajib).
            'stok' => 'required|numeric', // Stok harus diisi dan harus berupa angka (wajib dan numeric).
            'harga' => 'required|numeric', // Harga harus diisi dan harus berupa angka (wajib dan numeric).
            'deskripsi' => 'nullable'   // Deskripsi bersifat opsional (boleh kosong).
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'mimes:jpeg,jpg,png'
            ]);
            $gambar_file = $request->file('gambar');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = date('ymdhis') . "." . $gambar_ekstensi;
            $gambar_file->move(public_path('gambar'),$gambar_nama);

            $namaGambar = $produk->gambar;
            $pathGambar = public_path('gambar/') . $namaGambar;
            if (file_exists($pathGambar)) {
                unlink($pathGambar);
            }
            
            $data['gambar'] = $gambar_nama;
        }

        
        
        // Memperbarui data produk yang ada dalam database dengan data yang diterima dari permintaan HTTP.
        $produk->update($data);
        // Mengarahkan pengguna kembali ke halaman daftar produk dengan pesan sukses.
        return redirect(route('produk.index'))->with('success', 'Data Produk Telah Berhasil di Update');
    }

    // Metode ini digunakan untuk menghapus produk dari database.
    public function hapus(Produk $produk){
        $namaGambar = $produk->gambar;

        // Hapus file gambar jika ada
        $pathGambar = public_path('gambar/') . $namaGambar;
        if (file_exists($pathGambar)) {
            unlink($pathGambar);
        }
        // Menghapus produk dari database.
        $produk->delete();
        // Mengarahkan pengguna kembali ke halaman daftar produk dengan pesan sukses.
        return redirect(route('produk.index'))->with('success', 'Data Produk Telah Berhasil di Hapus');
    }
}

