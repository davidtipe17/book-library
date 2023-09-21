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
        Schema::create('autores', function (Blueprint $table) {
        	$table->id();
        	$table->foreignId('pais_id')->references('id')->on('paises');
        	$table->string('nombres', 45);
        	$table->string('apellidos', 45);
        	$table->text('biografia')->nullable();
        	$table->timestamp('fecha_creacion')->useCurrent();
        	$table->char('estado', 1)->default('A')->comment('A:active | I:inactivo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores');
    }
};
