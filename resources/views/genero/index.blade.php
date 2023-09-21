@extends('layouts/app')

@section('content')
<h1>Género</h1>
<div class="text-end">
	<a href="/genero/nuevo" class="btn btn-primary">Nuevo</a>
</div>
<table class="table">
	<thead>
    	<tr>
        	<th>Nombre</th>
        	<th>Id</th>
        	<th>Estado</th>
        	<th>Acciones</th>
    	</tr>
	</thead>
	<tbody>
	@forelse ($generos as $fila)
    	<tr>
        	<td>{{$fila->nombre}}</td>
        	<td>{{$fila->id}}</td>
        	<td>{{$fila->estado}}</td>
        	<td>
            	<a href="/generos/mostrar/{{$fila->id}}" class="btn btn-info">Editar</a>
            	<a href="/generos/eliminar/{{$fila->id}}" class="btn btn-danger">Eliminar</a>
        	</td>
    	</tr>
	@empty
    	<tr>
        	<td colspan="4"></td>
    	</tr>
	@endforelse
	</tbody>
</table>
@endsection
