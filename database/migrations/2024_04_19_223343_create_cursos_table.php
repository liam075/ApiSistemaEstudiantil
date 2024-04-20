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
        Schema::create('cursos', function (Blueprint $table) {
            /*
            Nombre (obligatorio, longitud 50)
○ Horario (Se acepta cualquier solución)
○ Fecha inicio (obligatorio, tipo fecha)
○ Fecha fin (obligatorio, tipo fecha)
○ Tipo (obligatorio, opciones: Presencial o Virtual)
            */
            $table->id();
            $table->string('nombre', 50);
            $table->string('horario');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('tipo',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
