<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'seller',
            'email' => 'seller@test.com',
            'password' => Hash::make('seller'),
            'role_id' => 1
        ]);
    }
}
