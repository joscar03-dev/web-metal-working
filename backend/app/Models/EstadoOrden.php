<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoOrden extends Model
{
    use HasFactory;
    protected $table = 'estados_orden';

    public function ordenesTrabajo()
    {
        return $this->hasMany(OrdenTrabajo::class, 'estado_id');
    }
}
