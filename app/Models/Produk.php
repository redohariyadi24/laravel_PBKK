<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Mendefinisikan atribut yang dapat diisi (fillable) dalam model Produk.
    protected $fillable = [
        'nama',       // Nama produk
        'artis',      // Nama artis atau pencipta produk
        'kategori',   // Kategori produk
        'stok',       // Stok atau jumlah produk yang tersedia
        'harga',      // Harga produk
        'deskripsi'   // Deskripsi atau informasi tambahan tentang produk
    ];
}
