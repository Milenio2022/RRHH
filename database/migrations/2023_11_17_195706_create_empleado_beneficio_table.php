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
        Schema::create('empleado_beneficio', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_beneficio');
            $table->foreign('id_empleado')->references('id')->on('empleado');
            $table->foreign('id_beneficio')->references('id')->on('beneficios');
            $table->primary(['id_empleado', 'id_beneficio']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_beneficio');
    }
};
