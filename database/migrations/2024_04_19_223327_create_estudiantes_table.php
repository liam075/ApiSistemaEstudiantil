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
        Schema::create('estudiantes', function (Blueprint $table) {
            /*
            Nombre (obligatorio, longitud 100)
○ Apellido (opcional, longitud 100)
○ Edad (obligatorio, la persona no puede ser menor de 18 años)
○ Cédula (obligatorio, la longitud máxima 11, de tipo string)
○ Correo electrónico (campo obligatorio, debe ser único, tipo email)
○ Cursos asociados (Se acepta cualquier solución)
            */
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100)->nullable();
            $table->integer('edad');
            $table->string('cedula', 11);
            $table->string('correo_electronico')->unique();
            $table->foreignId('cursos_id')->consrained('cursos')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
