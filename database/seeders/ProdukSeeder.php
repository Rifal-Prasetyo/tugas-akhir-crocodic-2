<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produk::create([
            'kategori_id' => 1,
            'nama_produk' => "CHOCOLATOS COKLAT",
            'kode_produk' => "PROD001",
            'merk' => "CHOCOLATOS",
            'harga_beli' => 400,
            'diskon' => 0,
            'harga_jual' => 500,
            'stok' => 500
        ]);
    }
}
