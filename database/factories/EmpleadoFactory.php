<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),

            'cargo' => fake()->randomElement([
                'Vendedor',
                'Supervisor',
                'Diseñador',
                'Carpintero',
                'Gerente'
            ]),

            'salario' => fake()->randomFloat(2, 12000, 50000),
            'fecha_contratacion' => fake()->date(),
        ];
    }
}
