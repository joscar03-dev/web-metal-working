<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    use HasFactory;
    protected $table = 'ordenes_trabajo';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function tipoOrden()
    {
        return $this->belongsTo(TipoOrden::class, 'tipo_orden_id');
    }

    public function estadoOrden()
    {
        return $this->belongsTo(EstadoOrden::class, 'estado_id');
    }

    public function detallesOrden()
    {
        return $this->hasMany(DetalleOrden::class, 'id_orden');
    }

    public function materialesOrden()
    {
        return $this->hasMany(MaterialOrden::class, 'id_orden');
    }

    public function tareasOrden()
    {
        return $this->hasMany(TareaOrden::class, 'id_orden');
    }
}
