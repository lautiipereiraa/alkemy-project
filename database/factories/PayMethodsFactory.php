<?php

namespace Database\Factories;

use App\Models\ShopCart;
use Illuminate\Database\Eloquent\Factories\Factory;


class PayMethodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo'=>fake()->creditCardType(),
        ];
    }
}
