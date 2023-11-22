<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficios extends Model
{
    use HasFactory;

    protected $table = 'beneficios';

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'empleado_beneficio', 'id_beneficio', 'id_empleado');
    }
}
