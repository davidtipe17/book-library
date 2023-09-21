<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('editoriales')->insert([
        	'id' => 1,
        	'nombre'=>'El Sol',
    	]);
    	DB::table('editoriales')->insert([
        	'id' => 2,
        	'nombre'=>'La Luna',
    	]);
    	DB::table('editoriales')->insert([
        	'id' => 3,
        	'nombre'=>'Safiro',
    	]);
    	DB::table('editoriales')->insert([
        	'id' => 4,
        	'nombre'=>'La Pradera',
    	]);


    }
}
