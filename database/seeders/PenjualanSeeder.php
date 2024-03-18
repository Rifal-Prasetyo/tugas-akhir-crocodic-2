<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Penjualan::create([
            'member_id' => 1,
            'total_item' => 2,
            'total_harga' => 50000,
            'diskon' => 0,
            'bayar' => 50000,
            'diterima' => 50000,
            'user_id' => 1
        ]);
    }
}
