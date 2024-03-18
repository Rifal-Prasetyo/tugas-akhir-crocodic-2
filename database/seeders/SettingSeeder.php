<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::create([
            'name_POS' => "RIFAL STORE",
            'description_POS' => "lorem",
            'diskon_for_members' => 10,
            'picture_url' => '/img/mencoba.png'
        ]);
    }
}
