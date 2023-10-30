<?php

namespace Database\Factories;

use App\Models\PayMethods;
use App\Models\ShopCart;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BuyOrder>
 */
class BuyOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $carritoId = ShopCart::all()->pluck("id")->toArray();
        $metodoPagoId= PayMethods::all()->pluck("id")->toArray();

        return [
            'carrito_id'=>fake()->randomElement($carritoId),
            'metodos_pago_id'=>fake()->randomElement($metodoPagoId), 
            'fecha_creacion' => now(),
        ];
    }
}
