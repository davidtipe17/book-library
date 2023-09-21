<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('autores')->insert([
        	'id' => 1,
        	'pais_id'=>3,
        	'nombres'=>'Juan Manuel',
        	'apellidos'=>'Lozano',
    	]);
    	DB::table('autores')->insert([
        	'id' => 2,
        	'pais_id'=>1,
        	'nombres'=>'Marco',
        	'apellidos'=>'Nuñez',
    	]);
    	DB::table('autores')->insert([
        	'id' => 3,
        	'pais_id'=>2,
        	'nombres'=>'Karina',
        	'apellidos'=>'Samaniego',
    	]);

       
    }
}
