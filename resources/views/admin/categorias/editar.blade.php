@extends('admin.template')
@section('titulo','Crear Categoria')

@section('contenido')
<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-shopping-cart"></i> CATEGORIAS <small>[Editar Categoria]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenidos">
				@if(count($errors)>0)
					@include('admin.secciones.errores')
				@endif

				{!! Form::model($categoria, ['route'=>['categorias.update',$categoria]]) !!}

					<div class="form-group">
						<label for="nombre">Nombre </label>
						{!! Form::text('nombre', null, array(
								'class'=>'form-control',
								'placeholder'=>'Ingresa el nombre...'
							)) 
						!!}
					</div>
					<div class="form-group">
						<label for="descripcion">Descripcion </label>
						{!! Form::textarea('descripcion', null, array(
								'class'=>'form-control'
							)) 
						!!}
					</div>
					<div class="form-group">
						{!! Form::submit('Actualizar', array('class'=>'btn btn-primary'))!!}
						<a href="{{ route('categorias.index') }}" class="btn btn-warning">Cancelar</a>
					</div>
   
				{!! Form::close() !!}
			</div>
		</div>
	</div>

</div>

@stop