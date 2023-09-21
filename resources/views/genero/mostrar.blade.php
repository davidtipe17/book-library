@extends('layouts/app')

@section('content')
<h1>Editar Género</h1>
<form method="post" action="/genero/guardar">
	@csrf
	<input type="hidden" name="id" value="{{$genero->id}}" />
	<div class="mb-3 row">
    	<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    	<div class="col-sm-10">
        	<input type="text" name="nombre" class="form-control" id="nombre" value="{{$genero->nombre}}" />
    	</div>
	</div>
	<div class="mb-3 row">
    	<label for="estado" class="col-sm-2 col-form-label">Estado</label>
    	<div class="col-sm-10">
        	<select name="estado" id="estado" class="form-select" >
            	<option value="A" {{ $genero->estado=='A' ? 'selected' : '' }}>Activo</option>
            	<option value="I" {{ $genero->estado=='I' ? 'selected' : '' }}>Inactivo</option>
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
