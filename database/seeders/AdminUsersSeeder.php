<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password123'), // change later
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Support Admin',
                'email' => 'supportadmin@example.com',
                'password' => Hash::make('password123'), // change later
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
