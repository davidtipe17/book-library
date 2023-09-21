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
        Schema::create('libros', function (Blueprint $table) {
        	$table->id();
        	$table->foreignId('autor_id')->references('id')->on('autores');
        	$table->foreignId('editorial_id')->references('id')->on('editoriales');
        	$table->string('titulo', 100);
        	$table->text('resumen');
        	$table->integer('paginas')->nullable();
        	$table->float('precio')->nullable();
        	$table->timestamp('fecha_creacion')->useCurrent();
        	$table->char('estado', 1)->default('A')->comment('A:active | I:inactivo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
