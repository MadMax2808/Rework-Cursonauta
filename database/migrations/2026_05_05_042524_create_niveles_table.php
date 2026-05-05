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
        Schema::create('niveles', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_nivel');
            $table->string('titulo');
            $table->text('contenido');
            $table->string('video_url')->nullable();
            $table->string('archivos_url')->nullable();
            $table->decimal('costo', 10, 2)->default(0);

            //Relación con curso
            $table->foreignId('curso_id')->constrained('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles');
    }
};
