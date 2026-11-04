<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use Database\Seeders\Producto as SeedersProductos;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        ProductoSeeder::factory()->count(15)->create();
    }
}