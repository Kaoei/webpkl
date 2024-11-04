<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_user' => 1,
                'role' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('pass123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'role' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('pass123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'role' => 'user',
                'username' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('pass123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
