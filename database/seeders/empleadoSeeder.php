<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class empleadoSeeder extends Seeder
{
    public function run(): void
    {
        Empleado::factory()->count(15)->create();
    }
}