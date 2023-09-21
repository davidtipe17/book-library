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
        Schema::create('genero_libros', function (Blueprint $table) {
        	$table->foreignId('genero_id')->references('id')->on('generos');
        	$table->foreignId('libro_id')->references('id')->on('libros');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genero_libros');
    }
};
