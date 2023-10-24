<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Mendefinisikan atribut yang dapat diisi (fillable) dalam model Kategori.
    protected $fillable = [
        'nama_kategori',       
    ];

    public function Produk(){
        // Menghubungkan model Kategori dengan model Produk berdasarkan 'kategori_id' di Produk dan 'id' di Kategori.
        $return = $this->hasMany("App\Model\Produk","kategori_id","id");
    }
}
