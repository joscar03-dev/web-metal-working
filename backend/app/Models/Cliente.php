<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['nombre', 'telefono','email', 'direccion', 'tipo_cliente_id'];

    public function tipoCliente()
    {
        return $this->belongsTo(TipoCliente::class, 'tipo_cliente_id');
    }

    public function ordenesTrabajo()
    {
        return $this->hasMany(OrdenTrabajo::class, 'id_cliente');
    }
}
