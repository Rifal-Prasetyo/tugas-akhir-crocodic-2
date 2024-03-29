<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan_Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'penjualan_id',
        'produk_id',
        'harga_jual',
        'jumlah',
        'diskon',
        'subtotal'
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
