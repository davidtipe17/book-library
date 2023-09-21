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
        Schema::create('editoriales', function (Blueprint $table) {
        	$table->id();
        	$table->string('nombre', 45);
        	$table->string('direccion', 100)->nullable();
        	$table->timestamp('fecha_creacion')->useCurrent();
        	$table->char('estado', 1)->default('A')->comment('A:active | I:inactivo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editoriales');
    }
};
