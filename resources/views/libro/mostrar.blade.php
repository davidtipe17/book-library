@extends('layouts/app')

@section('content')
<h1>Editar Libro</h1>
<form method="post" action="{{route('libro.editar')}}" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="id" value="{{$libro->id}}" />
	<div class="mb-3 row">
    	<label for="autor" class="col-sm-2 col-form-label">Autor</label>
    	<div class="col-sm-10">
        	<select name="autor" class="form-select" id="autor">
            	@foreach($autores as $autor)
            	<option value="{{$autor->id}}" @selected($autor->id==$libro->autor_id)>{{$autor->nombres}} {{$autor->apellidos}}</option>
            	@endforeach
        	</select>
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="editorial" class="col-sm-2 col-form-label">Editorial</label>
    	<div class="col-sm-10">
        	<select name="editorial" class="form-select" id="editorial">
            	@foreach($editoriales as $editorial)
            	<option value="{{$editorial->id}}" @selected($editorial->id==$libro->editorial_id)> {{$editorial->nombre}}</option>
            	@endforeach
        	</select>
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="titulo" class="col-sm-2 col-form-label">Título</label>
    	<div class="col-sm-10">
        	<input type="text" name="titulo" class="form-control" id="titulo" value="{{$libro->titulo}}" autofocus required />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="resumen" class="col-sm-2 col-form-label">Resumen</label>
    	<div class="col-sm-10">
        	<textarea name="resumen" class="form-control" id="resumen" required>{{$libro->resumen}}</textarea>
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="pagina" class="col-sm-2 col-form-label">Páginas</label>
    	<div class="col-sm-10">
        	<input type="number" name="pagina" class="form-control" id="pagina" value="{{$libro->paginas}}" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="precio" class="col-sm-2 col-form-label">Precio</label>
    	<div class="col-sm-10">
        	<input type="number" name="precio" class="form-control" id="precio" value="{{$libro->precio}}" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
    	<div class="col-sm-10">
        	<img src="/libros/{{$libro->imagen}}" height="120" />
        	<input type="file" name="imagen" class="form-control" id="imagen" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="estado" class="col-sm-2 col-form-label">Estado</label>
    	<div class="col-sm-10">
        	<select name="estado" class="form-select" id="estado">
            	<option value="A" @selected($libro->estado=='A')>Activo</option>
            	<option value="I" @selected($libro->estado=='I')>Inactivo</option>
        	</select>
    	</div>
	</div>
	<div class="mb-3 row">
    	<div class="col-sm-2"></div>
    	<div class="col-sm-10">
        	<button class="btn btn-primary">Guardar</button>
    	</div>
	</div>
</form>
@endsection
