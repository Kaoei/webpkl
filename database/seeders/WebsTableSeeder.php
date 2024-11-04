<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('webs')->insert([
            [
            'id_web' => 1,
            'title' => 'Web 1',
            'description' => 'Web 1 Deskripsi',
            'category' => 'Company Profile',
            'img_web' => 'web1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id_web' => 2,
            'title' => 'Web 2',
            'description' => 'Web 2 Description',
            'category' => 'Online Shop',
            'img_web' => 'web2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    }
}
