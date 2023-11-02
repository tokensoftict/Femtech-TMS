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
            'full_name' => 'Yusuf Olatunji',
            'email' => 'admin@femtechit.com',
            'phone_number' => '8130610626',
            'password' => Hash::make(123456),
            'gender' => 'Male',
            'address1' => 'Airport Road Ilorin Kwara State Nigeria',
            'city' => 'Ilorin',
        ]);
    }
}
