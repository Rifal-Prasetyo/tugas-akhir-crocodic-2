<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kategori::create([
            'name_kategori' => 'Makanan'
        ]);
        Kategori::create([
            'name_kategori' => 'Minuman'
        ]);
        Kategori::create([
            'name_kategori' => 'Maknaan Ringan'
        ]);
    }
}
