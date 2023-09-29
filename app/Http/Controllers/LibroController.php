<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;
use App\Models\Editorial;

class LibroController extends Controller
{
    public function index(){
    	$libros = Libro::all();
    	return view('libro/index', compact('libros'));
	}
	public function nuevo(){
    	$autores = Autor::all();
    	$editoriales = Editorial::all();
    	return view('libro/nuevo', compact('autores','editoriales'));
	}
	public function guardar(Request $request){
    	$libro = new Libro;
    	$libro->autor_id = $request->autor;
    	$libro->editorial_id = $request->editorial;
    	$libro->titulo = $request->titulo;
    	$libro->resumen = $request->resumen;
    	$libro->paginas = $request->pagina;
    	$libro->precio = $request->precio;
    	// Recuperamos el archivo adjunto llamado imagen
    	$archivo = $request->file('imagen');
    	if($archivo){ // Enviaron el archivo
        	// Obtenemos el nombre original del achivo
        	$nombreArchivo = 'book_'.$archivo->getClientOriginalName();
        	$libro->imagen = $nombreArchivo;
        	// Guardamos el archivo en el disco public
        	$archivo->storeAs('libros', $nombreArchivo);
    	}
    	$libro->save();
    	return redirect()->route('libro.index')->with('mensaje','Registro creado');
	}
	public function mostrar($id){
    	$libro = Libro::find($id);
    	$autores = Autor::all();
    	$editoriales = Editorial::all();
    	return view('libro/mostrar', compact('libro', 'autores','editoriales'));
}

public function editar(Request $request){
    	$id = $request->id;
    	$libro = Libro::find($id); // SELECT * FROM libros WHERE id=$id
    	$libro->autor_id = $request->autor;
    	$libro->editorial_id = $request->editorial;
    	$libro->titulo = $request->titulo;
    	$libro->resumen = $request->resumen;
    	$libro->paginas = $request->pagina;
    	$libro->precio = $request->precio;
    	// Recuperamos el archivo adjunto llamado imagen
    	$archivo = $request->file('imagen');
    	if($archivo){ // Enviaron el archivo
        	// Obtenemos el nombre original del achivo
        	$nombreArchivo = 'book_'.$archivo->getClientOriginalName();
        	$libro->imagen = $nombreArchivo;
        	// Guardamos el archivo en el disco public
        	$archivo->storeAs('libros', $nombreArchivo);
    	}
    	$libro->estado = $request->estado;
    	$libro->save();
    	return redirect()->route('libro.index')->with('mensaje','Registro actualizado');
}



}