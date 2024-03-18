<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function getAllDataProduks()
    {
        $produks = Produk::with(['kategori'])->latest()->get();
        return $produks;
    }
}
