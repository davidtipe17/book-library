<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\GeneroLibro;

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
		// esta es la vista, es el archivo creado en resources/views/genero= genero esta en singular
    	return view('genero/nuevo');
    }   
	public function guardar(Request $request){
		// Verifica si se proporciona un campo 'id' en la solicitud.
		// Si existe, se considera una edición; de lo contrario, es una creación.
		$genero = ($request->id) ? Genero::find($request->id) : new Genero;
	
		// Asigna el valor del campo 'nombre' del formulario al modelo Genero.
		$genero->nombre = $request->nombre;
	
		// Verifica si se proporciona un campo 'estado' en la solicitud.
		// Esto se cumple al editar el registro.
		if($request->estado){
			$genero->estado = $request->estado;
		}
	
		// Guarda el modelo Genero en la base de datos.
		// Si es una edición, actualizará el registro existente.
		// Si es una creación, insertará un nuevo registro.
		$genero->save();
	
		// Coloca la variable 'mensaje' en la sesión. Esto se utiliza para mostrar un mensaje de éxito.
		return redirect()->route('genero')->with('mensaje','Registro guardado');
	}
	public function eliminar($id){
    	$resultado = GeneroLibro::where('genero_id', $id)->count();
    	if($resultado>0){ // Hay registro de libros asociados al género
        	return redirect()->route('genero')
			->with('icon','exclamation-triangle-fill')
            	->with('estado','danger')
            	->with('mensaje','No se puede eliminar: el género tiene libros asociados');
    	}else{ // El género NO tiene libros asociados
        	// Buscamos el detalle de un registro por su id
        	$genero = Genero::find($id);
        	// SQL: DELETE FROM generos WHERE id=$id
        	$genero->delete(); // Eliminamos el registro encontrado
        	return redirect()->route('genero')->with('mensaje','Registro eliminado');
    	}
}

    
	// public function guardar(Request $request){
	// $genero = ($request->id) ? Genero::find($request->id) :  new Genero;
	// $genero->nombre = $request->nombre;
	// if($request->estado){ // Esto se cumple al editar el registro
	// 	$genero->estado = $request->estado;
	// }
	// // SQL: INSERT INTO generos VALUES(...)
	// $genero->save(); // Guardando en la base de datos
	// // Colocamos la variable $mensaje en sesión
	// return redirect()->route('genero')->with('mensaje','Registro guardado');
	// }


    



}
