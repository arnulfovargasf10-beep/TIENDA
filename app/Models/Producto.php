<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categoria;
class producto extends Model
{
    use HasFactory;

    protected $table = 'Producto';

    protected $fillable = [
        'categoria_id',
        'nombre',
        'descripcion',
        'precio',
        'stock'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
};
