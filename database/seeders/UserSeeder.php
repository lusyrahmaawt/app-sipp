<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'nik' => '3203035507020004',
            'nama_usaha' => 'Subasaku',
            'jenis_usaha' => 'Makanan Ringan',
            'alamat_usaha' => 'Jl. Raya Subang',
            'no_whatsapp' => '081234567890',
        ]);
    }
}
