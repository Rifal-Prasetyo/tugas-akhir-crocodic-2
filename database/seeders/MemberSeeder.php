<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Member::create([
            'nama_pelanggan' => 'Randi',
            'kode_member' => 'MEM' . rand(100, 1000),
            'alamat' => 'Srikandang',
            'telepon' => '+6283100000000'
        ]);
        Member::create([
            'nama_pelanggan' => 'Mendi',
            'kode_member' => 'MEM' . rand(100, 1000),
            'alamat' => 'Banjaran',
            'telepon' => '+6283100000000'
        ]);
    }
}
