<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categorias = Category::all()->pluck('id')->toArray();

        return [
            'nombre'=>fake()->sentence(random_int(1,6)),
            'precio'=>fake()->randomFloat(2),
            'imagen'=>fake()->imageUrl(),
            'descripcion'=>fake()->randomElement(),
            'categoria_id'=> fake()->randomElement($categorias),
        ];
    }
}
