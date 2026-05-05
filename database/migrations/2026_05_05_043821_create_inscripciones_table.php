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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->decimal('progreso', 5, 2)->default(0);
            $table->timestamp('fecha_ultimo_acceso')->nullable();
            $table->timestamp('fecha_terminacion')->nullable();
            $table->enum('estado', ['en curso', 'completado', 'abandonado'])->default('en curso');

            $table->foreignId('curso_id')->constrained('cursos');
            $table->foreignId('usuario_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
