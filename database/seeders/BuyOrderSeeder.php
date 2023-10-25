<?php

namespace Database\Seeders;

use App\Models\BuyOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuyOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buyOrder = new BuyOrder();
        $buyOrder->carrito_id = 1;
        $buyOrder->metodos_pago_id = 1;
        $buyOrder->fecha_creacion = 01/01/01;
        $buyOrder->save();
    }
}
