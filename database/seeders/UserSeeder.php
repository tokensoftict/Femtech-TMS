<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@femtechit.com',
            'phone_number' => '08130610626',
            'password' => bcrypt(123456),
            'gender' => 'Male',
            'address1' => 'Airport Road Ilorin Kwara State Nigeria',
            'city' => 'Ilorin',
        ]);
    }
}
