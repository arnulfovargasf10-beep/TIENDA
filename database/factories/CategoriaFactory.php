<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->unique()->randomElement([
              'Sillas',
              'Mesas',
              'Escritorios',
              'Closets',
              'Camas',
              'Muebles de Oficina',
              'Estantes',
              'Bibliotecas',
              'Comedores',
              'Muebles de Jardín',
              'Muebles Infantiles',
              'Gabinetes',
              'Sofás',
              'Vitrinas',
              'Repisas'
            ]),

           'descripcion' => fake()->sentence(),
        ];
    }
};
