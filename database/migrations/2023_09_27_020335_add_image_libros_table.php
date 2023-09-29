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
        Schema::table('libros', function (Blueprint $table) {
        	// Añadimos un nuevo campo llamado imagen
        	// despues del campo precio
        	$table->string('imagen')->nullable()->default('default.jpg')->after('precio');
    	});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
        	// Añadimos un nuevo campo llamado imagen
        	// despues del campo precio
        	$table->dropColum('imagen');
    	});

    }
};
