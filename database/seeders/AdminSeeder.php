<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Diskop UKM',
            'email' => 'diskop@example.com',
            'password' => Hash::make('diskopukm123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
