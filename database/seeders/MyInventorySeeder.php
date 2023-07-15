<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyInventory;


class MyInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyInventory::create([
            'user_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'sold' => 0
        ]);
    }
}
