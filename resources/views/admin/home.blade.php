@extends('admin.template')
@section('titulo','Administracion')

@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-rocket"></i>ADMIN - TIENDA CAMISAS</h1>
	</div>
	<h3>Bienvenido(a) {{ Auth::user()->name }} al panel de administración de la tienda en línea</h3><hr>

	<div class="row">
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-list-alt icon-home"></i>
				<a href="{{route('categorias.index')}}" class="btn btn-warning btn-block btn-home-admin">CATEGORIAS</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-shopping-cart icon-home"></i>
				<a href="#" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-cc-paypal icon-home"></i>
				<a href="#" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-users icon-home"></i>
				<a href="#" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
			</div>
		</div>
	</div>

</div>
@endsection