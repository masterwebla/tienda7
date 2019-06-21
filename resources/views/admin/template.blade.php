<!DOCTYPE html>
<html>
<head>
	<title>Administrador Camisas - @yield('titulo')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('admin/css/main.css')}}" rel="stylesheet">

</head>
<body>
	@if(\Session::has('mensaje'))
		@include('admin.secciones.mensajes')
	@endif

	@include('admin.secciones.menu')
	@yield('contenido')
	@include('admin.secciones.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>