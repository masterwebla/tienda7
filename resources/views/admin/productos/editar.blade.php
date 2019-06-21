@extends('admin.template')
@section('titulo','Crear Categoria')

@section('contenido')
<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-shopping-cart"></i> PRODUCTOS <small>[Editar Producto]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenidos">
				@if(count($errors)>0)
					@include('admin.secciones.errores')
				@endif

				{{ Form::model($producto, array('route' => array('productos.update', $producto->id), 'method' => 'PUT')) }}

					<div class="form-group">
                         <label class="control-label" for="idcategoria">Categoría</label>
                         {!! Form::select('idcategoria', $categorias, null, ['class' => 'form-control']) !!}
                        </div>
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
                        <label for="precio">Precio:</label>
                            
                            {!! 
                                Form::text('precio',null, array('class'=>'form-control',
                                        'placeholder' => 'Ingresa el precio...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            
                            {!! 
                                Form::text('imagen', null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la url de la imagen...',
                                    )
                                ) 
                            !!}
                        </div>      
					<div class="form-group">
						{!! Form::submit('Actualizar', array('class'=>'btn btn-primary'))!!}
						<a href="{{ route('productos.index') }}" class="btn btn-warning">Cancelar</a>
					</div>
   
				{!! Form::close() !!}
			</div>
		</div>
	</div>

</div>

@stop