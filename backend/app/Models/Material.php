<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materiales';

    public function materialesProducto()
    {
        return $this->hasMany(MaterialProducto::class, 'id_material');
    }

    public function materialesOrden()
    {
        return $this->hasMany(MaterialOrden::class, 'id_material');
    }
}
