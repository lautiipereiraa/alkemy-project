<?php

namespace Database\Seeders;

use App\Models\ShopCart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shopCart = new ShopCart;
        $shopCart->usuario_id = "1";
        $shopCart->save();
    }
}
