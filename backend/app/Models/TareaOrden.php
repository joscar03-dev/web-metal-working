<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaOrden extends Model
{
    use HasFactory;
    protected $table = 'tareas_orden';

    public function ordenTrabajo()
    {
        return $this->belongsTo(OrdenTrabajo::class, 'id_orden');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}
