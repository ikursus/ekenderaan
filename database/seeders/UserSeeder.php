<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cara 1 Masuk data guna Query Builder
        // Cara 2 Masuk data guna Eloquent ORM / Model

        // User 1 - Cara 1
        DB::table('users')->insert([
            'first_name' => 'Ahmad',
            'last_name' => 'Ridwan',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('abc123'),
            'role' => 'admin'
        ]);

        // User 2 - Cara 1
        DB::table('users')->insert([
            'first_name' => 'Siti',
            'last_name' => 'Aminah',
            'email' => 'siti@gmail.com',
            'password' => bcrypt('abc123'),
            'role' => 'user'
        ]);

        // User 3 - Cara 1
        DB::table('users')->insert([
            'first_name' => 'Ah',
            'last_name' => 'Chong',
            'email' => 'ahchong@gmail.com',
            'password' => bcrypt('abc123'),
            'role' => 'user'
        ]);
    }
}
