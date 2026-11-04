<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [

            'cliente_id' => Cliente::inRandomOrder()->first()->id,

            'empleado_id' => Empleado::inRandomOrder()->first()->id,

            'fecha_pedido' => fake()->date(),

            'estado' => fake()->randomElement([
                'Pendiente',
                'En proceso',
                'Entregado'
            ]),

            'total' => fake()->randomFloat(2, 1000, 50000),
        ];
    }
}