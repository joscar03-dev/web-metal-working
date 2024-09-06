<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialOrden extends Model
{
    use HasFactory;
    protected $table = 'materiales_orden';

    public function ordenTrabajo()
    {
        return $this->belongsTo(OrdenTrabajo::class, 'id_orden');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'id_material');
    }
}
