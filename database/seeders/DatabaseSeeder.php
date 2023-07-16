<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Client;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ClientSeeder::class,
            AddressSeeder::class,
            ProductSeeder::class,
            MyInventorySeeder::class,
            PurchaseSeeder::class,
            PaymentSeeder::class,
        ]);

        User::factory(10)->create();
        Client::factory(15)->create();
        Product::factory(20)->create();

    }
}
