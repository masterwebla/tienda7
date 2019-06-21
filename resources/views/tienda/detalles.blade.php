@extends('tienda.template')
@section('titulo', 'Detalles de la camisa')

@section('contenido')
<div class="container text-center">
	<h1>Detalles de la camisa</h1>
	
	<div class="row">
		<div class="col-md-5">
			<div class="bloque-producto">
				<img src="{{asset($producto->imagen)}}">
			</div>
		</div>
		<div class="col-md-7">
			<div class="bloque-producto">
				<h2>{{$producto->nombre}}</h2>				
				<p>{{$producto->descripcion}}</p>
				<h3>${{$producto->precio}}</h3>
				<p><a class="btn btn-warning btn-block" href="{{ route('carrito-agregar', $producto->id) }}">Agregar al Carrito</a></p>
			</div>
		</div>
					
	</div>
	<hr>
		<p><a class="btn btn-primary" href="{{route('inicio')}}">Volver</a></p>
</div>
@endsection