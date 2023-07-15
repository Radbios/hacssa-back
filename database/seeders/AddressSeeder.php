<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;


class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'client_id' => 1,
            'street' => 1,
            'city' => 1,
            'state' => 1,
            'country' => 1,
            'latitude' =>-9.55742266181595,
            'longitude' =>-35.74943337986463
        ]);

        Address::create([
            'client_id' => 2,
            'street' => 1,
            'city' => 1,
            'state' => 1,
            'country' => 1,
            'latitude' =>-9.555878,
            'longitude' =>-35.751842
        ]);
    }
}
