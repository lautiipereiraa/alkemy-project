<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopCart>
 */
class ShopCartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $userId = User::all()->pluck('id')->toArray();
        
        return [
            'usuario_id'=> fake()->randomElement($userId),
            'importe'=> fake()->randomFloat(2),
            'fecha_creacion'=>fake()->date(),
            'finalizado'=> true,
        ];
    }
}
