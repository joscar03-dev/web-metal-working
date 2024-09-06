<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class, 'tipo_producto_id');
    }

    public function detallesOrden()
    {
        return $this->hasMany(DetalleOrden::class, 'id_producto');
    }

    public function materialesProducto()
    {
        return $this->hasMany(MaterialProducto::class, 'id_producto');
    }
}
