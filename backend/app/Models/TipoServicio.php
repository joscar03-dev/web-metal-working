<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    use HasFactory;
    protected $table = 'tipos_servicio';

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'tipo_servicio_id');
    }
}
