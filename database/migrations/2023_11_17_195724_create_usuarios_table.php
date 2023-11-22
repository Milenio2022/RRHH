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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario', 50)->unique()->nullable(false);
            $table->string('correo_electronico', 100)->unique()->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->string('nombre', 50)->nullable();
            $table->string('apellido', 50)->nullable();
            $table->timestamp('fecha_registro')->default(now());
            $table->enum('rol', ['admin', 'usuario'])->default('usuario');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('imagen_perfil', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
