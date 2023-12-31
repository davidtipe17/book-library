@extends('layouts/app')

@section('content')
<h1>Género</h1>
<div class="text-end">
	<a href="/generos/nuevo" class="btn btn-primary">Nuevo</a>
</div>
@if(session('mensaje'))
<div class="alert alert-{{session('estado','success')}} alert-dismissible fade show mt-3" role="alert">
	<i class="bi bi-{{session('icon','check-circle-fill')}}"></i> {{session('mensaje')}}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

<table class="table">
	<thead>
    	<tr>
        	<th>Nombre</th>
        	<th>Id</th>
        	<th>Estado</th>
        	<th>Fecha Creación</th>
        	<th>Acciones</th>
    	</tr>
	</thead>
	<tbody>
	@forelse ($generos as $fila)
    	<tr>
        	<td>{{$fila->nombre}}</td>
        	<td>{{$fila->id}}</td>
        	<td>
            	<span class="badge bg-{{Utilidad::bagde($fila->estado)}}">
                	{{Utilidad::estado($fila->estado)}}
            	</span>
        	</td>
        	<td>{{Fecha::formato($fila->fecha_creacion)}}</td>
        	<td>
            	<a href="/generos/mostrar/{{$fila->id}}" title="Editar" class="btn btn-info">
                	<i class="bi bi-pencil-square"></i>
            	</a>
            	<a href="/generos/eliminar/{{$fila->id}}" title="Eliminar" class="btn btn-danger">
                	<i class="bi bi-trash"></i>
            	</a>
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
