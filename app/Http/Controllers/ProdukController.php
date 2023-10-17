<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();

        return view('produk.produk', ['produks' => $produks]);
    }

    public function tambah(){
        return view('produk.tambah');
    }

    public function simpan(Request $request){
    $data = $request->validate([
        'nama' => 'required',
        'artis' => 'required',
        'kategori' => 'required',
        'stok' => 'required|numeric',
        'harga' => 'required|numeric',
        'deskripsi' => 'nullable'
    ]);

    $newProduk = Produk::create($data);

    return redirect(route('produk.index'));
    }

    public function edit(Produk $produk){
        return view('produk.edit', ['produk' => $produk]);
    }

    public function update(Produk $produk, Request $request){
    $data = $request->validate([
        'nama' => 'required',
        'artis' => 'required',
        'kategori' => 'required',
        'stok' => 'required|numeric',
        'harga' => 'required|numeric',
        'deskripsi' => 'nullable'
    ]);

    $produk->update($data);

    return redirect(route('produk.index'))->with('success', 'Data Produk Telah Berhasil di Update');
    }

    public function hapus(Produk $produk){
        $produk->delete();

        return redirect(route('produk.index'))->with('success', 'Data Produk Telah Berhasil di Hapus');
    }
}

