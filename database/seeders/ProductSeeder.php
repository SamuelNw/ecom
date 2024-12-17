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
            'name' => 'Arabica Coffee',
            'description' => 'A premium quality coffee product.',
            'price' => 1000,
        ]);

        Product::create([
            'name' => 'Robusta Coffee',
            'description' => 'Strong and rich coffee beans.',
            'price' => 1200,
        ]);

        Product::create([
            'name' => 'Espresso Blend',
            'description' => 'Perfect for espresso lovers.',
            'price' => 1500,
        ]);
    }
}
