<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'user_id' => 1,
            'name' => 'Fabiano',
            'phone' => 123,
            'gender' => 'male',
            'last_purchase_date' => '1999-04-11',
            'debt' => 0
        ]);
    }
}
