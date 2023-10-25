<?php

namespace Database\Seeders;

use App\Models\PayMethods;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payMethod = new PayMethods();
        $payMethod->tipo = "MercadoPago";
        $payMethod->save();
    }
}
