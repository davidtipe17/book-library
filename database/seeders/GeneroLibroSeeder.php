<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GeneroLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
    	DB::table('genero_libros')->insert([
        	'genero_id'=>1,
        	'libro_id'=>1,
    	]);
    	DB::table('genero_libros')->insert([
        	'genero_id'=>2,
        	'libro_id'=>1,
    	]);
    	DB::table('genero_libros')->insert([
        	'genero_id'=>2,
        	'libro_id'=>2,
    	]);

    }
}
