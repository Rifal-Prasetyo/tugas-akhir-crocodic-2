<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\Penjualan;
use App\Models\Penjualan_Detail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Penjualan_Detail::create([
            'penjualan_id' => 1,
            'produk_id' => 1,
            'harga_jual' => 10000,
            'jumlah' => 9,
            'diskon' => 10,
            'subtotal' => 90000
        ]);
    }
}
