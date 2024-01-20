<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'role' => 'admin',
                'type' => 'individual',
                'status' => 'active',
                'phone' => '08123456789',
                'email' => 'admin@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Receiver 1',
                'username' => 'receiver1',
                'role' => 'receiver',
                'type' => 'business',
                'status' => 'active',
                'phone' => '0724997360',
                'email' => 'receiver1@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Guest r1g1',
                'username' => 'guestr1g1',
                'role' => 'guest',
                'type' => 'individual',
                'status' => 'active',
                'phone' => '0724997360',
                'email' => 'guestr1g1@email.com',
                'password' => bcrypt('password'),

            ]



        ]);
    }
}
