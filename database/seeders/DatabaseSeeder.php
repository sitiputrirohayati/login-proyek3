<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Roles::create([
            'nama' => 'admin',
        ]);
        Roles::create([
            'nama' => 'dokter',
        ]);
        Roles::create([
            'nama' => 'pasien',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'dokter',
            'email' => 'dokter@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'pasien',
            'email' => 'pasien@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3,
        ]);
    }
}
