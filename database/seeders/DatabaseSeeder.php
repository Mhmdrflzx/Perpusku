<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Raffi Al Hafizh',
            'email' => 'raffiraffi646@gmail.com',
            'role' => 'admin',
            'alamat' => 'Jodog Gilangharjo Pandak Bantul',
            'nomor' => '088225447609',
            'password' => Hash::make('pepekkuda')
        ]);
    }
}
