<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert(
            [
            [
            'id_order' => 1,
            'name' => 'John Doe',
            'email' => 'user@gmail.com',
            'domain_name' => 'johndoe.com',
            'bukti_tf' => 'bukti_tf.jpg',
            'id_web' => 1,
            'id_user' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id_order' => 2,
            'name' => 'Jane Doe',
            'email' => 'user2@gmail.com',
            'domain_name' => 'janedoe.com',
            'bukti_tf' => 'bukti_tf.jpg',
            'id_web' => 1,
            'id_user' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
