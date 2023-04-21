<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // category database seed
        Categories::create([
            'name' => 'Electronics',
            'description' => 'Electronic devices and accessories',
        ]);
        Categories::create([
            'name' => 'Clothing',
            'description' => 'Apparel for men, women, and children',
        ]);

        // product database seed

        $electronics = Categories::where('name', 'Electronics')->first();
        $clothing = Categories::where('name', 'Clothing')->first();

        Products::create([
            'name' => 'iPhone 12 Pro',
            'description' => 'A high-end smartphone from Apple',
            'price' => 999.00,
            'quantity' => 100,
            'unit' => 'piece',
            'image_url' => 'https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg',
            'category_id' => $electronics->id,
        ]);

    }
}
