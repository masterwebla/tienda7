@extends('admin.template')
@section('titulo','Admin de Productos')

@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Productos
		<a class="btn btn-warning" href="{{ route('productos.create') }}"><i class="fa fa-plus-circle"></i>Nueva</a></h1>
	</div>
	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Editar</th>
						<th>Eliminar</th>
						<th>Imagen</th>
						<th>Nombre</th>
						<th>Precio</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
						<tr>
							<td><a class="btn btn-warning" 
								href="{{ route('productos.edit', $producto->id) }}">
								<i class="fa fa-pencil-square"></i></a></td>
							<td>
								{!! Form::open(['route' => ['productos.destroy', $producto->id]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        						{!! Form::close() !!}
							</td>
							<td><img src="{{$producto->imagen}}" width="40"></td>
							<td>{{$producto->nombre}}</td>
							<td>${{ number_format($producto->precio,2) }}</td>
						</tr>
					@endforeach				
				</tbody>
			</table>
		</div>
		<hr>
		<?php echo $productos->render(); ?>
	</div>
</div>

@endsection