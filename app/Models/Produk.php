<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_id',
        'nama_produk',
        'kode_produk',
        'merk',
        'harga_beli',
        'diskon',
        'harga_jual',
        'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }


    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
