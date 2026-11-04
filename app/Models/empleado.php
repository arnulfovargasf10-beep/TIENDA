<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class empleado extends Model
{
   use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'apellido',
        'cargo',
        'salario',
        'fecha_contratacion'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
};
