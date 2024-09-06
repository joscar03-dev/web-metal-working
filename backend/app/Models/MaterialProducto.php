<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialProducto extends Model
{
    use HasFactory;
    protected $table = 'materiales_producto';

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'id_material');
    }
}
