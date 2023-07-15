<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => "Shampoo",
            'price' => 50.0,
            'description' => "é um shampoo",
            'current_quantity' => 3,
            'total_quantity' => 3
        ]);
    }
}
