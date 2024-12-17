<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'hs@gmail.com',
            'role' => 'headStaff',
            'password' => Hash::make('HS123'),
        ]);
        User::create([
            'email' => 'staff@gmail.com',
            'role' => 'staff',
            'password' => Hash::make('Staff123'),
        ]);
    }
}
