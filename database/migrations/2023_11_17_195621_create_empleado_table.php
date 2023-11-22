<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->dateTime('fecha_nacimiento');
            $table->string('genero', 10);
            $table->string('direccion', 255);
            $table->integer('telefono');
            $table->string('correo', 255);
            $table->string('password', 255)->nullable(false);
            $table->dateTime('fecha_contratacion');
            $table->float('salario');
            $table->enum('rol', ['admin', 'usuario'])->default('usuario');
            $table->string('imagen_perfil', 100)->nullable();

            $table->unsignedBigInteger('id_supervisor');
            $table->unsignedBigInteger('id_departamento');
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_supervisor')->references('id')->on('supervisor');
            $table->foreign('id_departamento')->references('id')->on('departamento');
            $table->foreign('id_cargo')->references('id')->on('cargo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
};
