<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  si no se envia id, la base de datos lo autogenera
    public function run(): void
    {
        DB::table('paises')->insert([
        	'id' => 1,
        	'nombre'=>'España',
        	'nacionalidad'=> 'Español'
    	]);
    	DB::table('paises')->insert([
        	'id' => 2,
        	'nombre'=>'Perú',
        	'nacionalidad'=> 'Peruano'
    	]);
    	DB::table('paises')->insert([
        	'id' => 3,
        	'nombre'=>'Colombia',
        	'nacionalidad'=> 'Colombiano'
    	]);
    	DB::table('paises')->insert([
        	'id' => 4,
        	'nombre'=>'México',
        	'nacionalidad'=> 'Mexicano'
    	]);
    }
}
