@extends('admin.template')
@section('titulo','Admin de Categorias')

@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Categorias
		<a class="btn btn-warning" href="{{ route('categorias.create') }}"><i class="fa fa-plus-circle"></i>Nueva</a></h1>
	</div>
	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Editar</th>
						<th>Eliminar</th>
						<th>Nombre</th>
						<th>Descripcion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categorias as $categoria)
						<tr>
							<td><a class="btn btn-warning" 
								href="{{route('categorias.edit', $categoria->id) }}">
								<i class="fa fa-pencil-square"></i></a></td>
							<td><a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a></td>
							<td>{{$categoria->nombre}}</td>
							<td>{{$categoria->descripcion}}</td>
						</tr>
					@endforeach				
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection