<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Purchase::create([
            'client_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'discount_unit' => 0,
            'total' => 0,
            'date' => "2023-07-11"
        ]);
    }
}
