<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create multiple users

        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' => 'user1@teste.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'user2',
                'email' => 'user2@teste.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'user2',
                'email' => 'user3@teste.com',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
