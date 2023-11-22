<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $table = 'supervisor';


    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_supervisor');
    }


    protected $fillable=[
        'nombre',
        'apellidos',
        'telefono',
        'correo'
    ];
}
