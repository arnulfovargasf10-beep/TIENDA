<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categoria;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      /*   User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        Categoria::factory()->count(15)->create();
        Cliente::factory()->count(15)->create();
        Empleado::factory()->count(15)->create();
        Pedido::factory()->count(15)->create();
        Producto::factory()->count(15)->create();
    }
}
