<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
	public function index(){
    	// Obtener el listado de los registro de la tabla generos
    	// SQL: SELECT * FROM generos
    	$generos = Genero::all();
    	return view('genero/index', compact('generos'));
	}
    public function mostrar($id){
    	// Obtener el detalle de un registro de la tabla generos
    	// SQL: SELECT * FROM generos WHERE id=5
    	$genero = Genero::find($id);
    	return view('genero/mostrar', compact('genero'));
}

    public function nuevo(){
    	return view('genero/nuevo');
    }   

    
public function guardar(Request $request){
	$genero = ($request->id) ? Genero::find($request->id) :  new Genero;
	$genero->nombre = $request->nombre;
	if($request->estado){ // Esto se cumple al editar el registro
		$genero->estado = $request->estado;
	}
	// SQL: INSERT INTO generos VALUES(...)
	$genero->save(); // Guardando en la base de datos
	// Colocamos la variable $mensaje en sesión
	return redirect()->route('genero')->with('mensaje','Registro guardado');
}


    



}
