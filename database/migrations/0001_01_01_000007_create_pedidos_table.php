<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')
                  ->constrained('clientes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('empleado_id')
                  ->constrained('empleados')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->date('fecha_pedido');
            $table->enum('estado', ['Pendiente','En proceso','Entregado'])->default('Pendiente');
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};