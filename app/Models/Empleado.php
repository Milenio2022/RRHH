<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends Authenticatable
{
    use HasFactory;
    protected $table = 'empleado';


    // RELACIONES ENTRE TABLAS
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class, 'id_supervisor');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }

    public function beneficios()
    {
        return $this->belongsToMany(Beneficios::class, 'empleado_beneficio', 'id_empleado', 'id_beneficio');
    }

    public function historialLaboral()
    {
        return $this->hasMany(HistorialLaboral::class, 'id_empleado');
    }




    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'genero',
        'direccion',
        'telefono',
        'correo',
        'password',
        'fecha_contratacion',
        'salario',
        'rol',
        'imagen_perfil',
        'id_supervisor',
        'id_departamento',
        'id_cargo',
    ];



    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


}
