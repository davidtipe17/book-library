@extends('layouts/app')

@section('content')
<h1>Nuevo Género</h1>
<form method="post" action="{{route('genero.guardar')}}">
	@csrf
	<div class="mb-3 row">
    	<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    	<div class="col-sm-10">
        	<input type="text" name="nombre" class="form-control" id="nombre" />
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
