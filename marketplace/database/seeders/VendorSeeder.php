<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use App\Models\User;

class VendorSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        Vendor::create([
            'user_id' => $users[0]->id,
            'shop_name' => 'Tech Store',
            'description' => 'Your one-stop tech shop!',
            'phone' => '1234567890',
        ]);

        Vendor::create([
            'user_id' => $users[1]->id ?? $users[0]->id,
            'shop_name' => 'Fashion Hub',
            'description' => 'Trendy clothing for all ages.',
            'phone' => '9876543210',
        ]);

        Vendor::create([
            'user_id' => $users[2]->id ?? $users[0]->id,
            'shop_name' => 'Home Essentials',
            'description' => 'Everything you need for your home.',
            'phone' => '5555555555',
        ]);
    }
}
