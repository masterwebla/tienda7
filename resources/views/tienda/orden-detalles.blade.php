@extends('tienda.template')
@section('titulo', 'Detalles del Pedido')

@section('contenido')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Detalles de la Orden</h1>
	</div>
	<div class="tabla-carrito">
		<div class="table-responsive">
			<h3>Datos del Usuario</h3>
			<table class="table table-striped table-hover table-bordered">
				<tr><td>Nombre</td><td>{{ Auth::user()->name }}</td></tr>
				<tr><td>Email</td><td>{{ Auth::user()->email }}</td></tr>
				<tr><td>Direccion</td><td>{{ Auth::user()->direccion }}</td></tr>
			</table>
		</div>
		<div class="table-responsive">
			<h3>Datos de la Orden</h3>
			<table class="table table-striped table-hover table-bordered">
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
				</tr>			
				@foreach($carrito as $item)
				<tr>
					<td>{{$item->nombre}}</td>
					<td>{{$item->precio}}</td>
					<td>{{$item->cantidad}}</td>
					<td>{{$item->precio * $item->cantidad}}</td>
				</tr>
				@endforeach
			</table><hr>
			<h3><span class="label label-success">
				Total: $ {{number_format($total,2)}}
				</span>
			</h3>
		</div>
	</div>
	<p>
		<a href="{{ route('inicio')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i> Seguir Comprando
		</a>
		<a href="{{ route('payment') }}" class="btn btn-primary">
			Pagar <i class="fa fa-cc-paypal fa-2x"></i>
		</a>
		<hr>
	</p>
	</div>
</div>

@endsection