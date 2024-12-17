<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1,'name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2,'name' => 'Manager', 'email' => 'manager@example.com', 'password' => bcrypt('password'), 'role' => 'manager', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
