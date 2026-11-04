<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
     use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'cliente_id',
        'empleado_id',
        'fecha_pedido',
        'estado',
        'total'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
};
