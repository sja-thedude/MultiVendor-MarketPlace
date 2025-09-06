<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Vendor;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $vendors = Vendor::all();

        Product::create([
            'vendor_id' => $vendors[0]->id,
            'name' => 'Laptop X200',
            'description' => 'Powerful laptop for work and gaming.',
            'price' => 1200.00,
            'stock' => 5
        ]);

        Product::create([
            'vendor_id' => $vendors[0]->id,
            'name' => 'Wireless Mouse',
            'description' => 'Ergonomic and responsive.',
            'price' => 25.50,
            'stock' => 20
        ]);

        Product::create([
            'vendor_id' => $vendors[1]->id,
            'name' => 'Gaming Keyboard',
            'description' => 'Mechanical keyboard with RGB lighting.',
            'price' => 80,
            'stock' => 20,
        ]);

        Product::create([
            'vendor_id' => $vendors[1]->id,
            'name' => 'HD Monitor 24"',
            'description' => '24-inch Full HD monitor for gaming and work.',
            'price' => 180,
            'stock' => 15,
        ]);

        Product::create([
            'vendor_id' => $vendors[2]->id,
            'name' => 'Dell Laptop X200',
            'description' => 'High performance laptop with 16GB RAM.',
            'price' => 2000,
            'stock' => 10,
        ]);

        Product::create([
            'vendor_id' => $vendors[2]->id,
            'name' => 'Wireless Samsung Mouse',
            'description' => 'Ergonomic mouse with long battery life.',
            'price' => 28.5,
            'stock' => 50,
        ]);

        Product::create([
            'vendor_id' => $vendors[1]->id,
            'name' => 'Summer Dress',
            'description' => 'Light and breezy summer dress.',
            'price' => 45,
        ]);

        Product::create([
            'vendor_id' => $vendors[2]->id,
            'name' => 'Vacuum Cleaner',
            'description' => 'Keep your home spotless.',
            'price' => 150,
        ]);
    }
}
