@extends('layouts/app')

@section('content')
<h1>Libro</h1>
<div class="text-end">
	<a href="/libros/nuevo" class="btn btn-primary">Nuevo</a>
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
        	<th>Título</th>
        	<th>Autor</th>
        	<th>Editorial</th>
        	<th>Precio</th>
        	<th>Id</th>
        	<th>Estado</th>
        	<th>Fecha Creación</th>
        	<th>Acciones</th>
    	</tr>
	</thead>
	<tbody>
	@forelse ($libros as $fila)
    	<tr>
        	<td>{{$fila->titulo}}</td>
        	<td>{{$fila->autor->nombres}} {{$fila->autor->apellidos}}</td>
        	<td>{{$fila->editorial->nombre}}</td>
        	<td>S/ {{$fila->precio}}</td>
        	<td>{{$fila->id}}</td>
        	<td>
            	<span class="badge bg-{{Utilidad::bagde($fila->estado)}}">
                	{{Utilidad::estado($fila->estado)}}
            	</span>
        	</td>
        	<td>{{Fecha::formato($fila->fecha_creacion)}}</td>
        	<td>
            	<a href="/libros/mostrar/{{$fila->id}}" title="Editar" class="btn btn-info">
                	<i class="bi bi-pencil-square"></i>
            	</a>
            	<a href="/libros/eliminar/{{$fila->id}}" title="Eliminar" class="btn btn-danger">
                	<i class="bi bi-trash"></i>
            	</a>
        	</td>
    	</tr>
	@empty
    	<tr>
        	<td class="text-center" colspan="8">No hay registros</td>
    	</tr>
	@endforelse
	</tbody>
</table>
@endsection
