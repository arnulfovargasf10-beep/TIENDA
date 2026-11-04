<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'codigo',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'estado',
        'direccion'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
};
