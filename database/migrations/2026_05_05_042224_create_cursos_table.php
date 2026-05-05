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
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('imagen_url')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('total_niveles')->default(1);
            $table->decimal('calificacion_promedio', 3, 2)->default(0);
            $table->boolean('activo')->default(true);

            // Relaciones
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('instructor_id')->constrained('users');
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
