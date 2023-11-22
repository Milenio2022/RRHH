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
        Schema::create('historial_laboral', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_finalizacion');
            $table->unsignedBigInteger('id_empleado');
            $table->foreign('id_empleado')->references('id')->on('empleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_laboral');
    }
};
