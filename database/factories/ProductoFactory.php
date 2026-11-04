<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id' => Categoria::inRandomOrder()->first()->id,

            'nombre' => fake()->words(3, true),

            'descripcion' => fake()->paragraph(),

            'precio' => fake()->randomFloat(2, 500, 25000),

            'stock' => fake()->numberBetween(1, 100),
        ];
    }
};
