<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('libros')->insert([
        	'id' => 1,
        	'autor_id'=>3,
        	'editorial_id'=>2,
        	'titulo'=>'Día soleado por la noche',
        	'resumen'=>'Un dia de sol a las 9pm',
        	'precio' => '30.70'
    	]);
    	DB::table('libros')->insert([
        	'id' => 2,
        	'autor_id'=>1,
        	'editorial_id'=>4,
        	'titulo'=>'Vacaciones en la playa de estacionamiento',
        	'resumen'=>'Una semana de vacaciones sin auto',
        	'precio' => '34.60'
    	]);

    }
}
