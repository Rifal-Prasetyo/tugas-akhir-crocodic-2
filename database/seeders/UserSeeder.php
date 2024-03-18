<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Muhammad Rifal Prasetyo",
            'email' => "hrdsdsms765@gmail.com",
            'password' => bcrypt('password'),
            'role' => 'admin',
            'picture_url' => '/img/default-profile.png',
        ]);
        User::create([
            'name' => "Nisauzzahro",
            'email' => "nisa@gmail.com",
            'password' => bcrypt('password'),
            'role' => 'owner',
            'picture_url' => '/img/default-profile.png',
        ]);
        User::create([
            'name' => "Doni Prasetya",
            'email' => "Doni@gmail.com",
            'password' => bcrypt('password'),
            'role' => 'karyawan',
            'picture_url' => '/img/default-profile.png',
        ]);
        //
    }
}
