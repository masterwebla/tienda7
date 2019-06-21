<!DOCTYPE html>
<html>
<head>
	<title>Tienda Camisas - @yield('titulo')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">

</head>
<body>
	@if(\Session::has('mensaje'))
		@include('tienda.secciones.mensajes')
	@endif

	@include('tienda.secciones.menu')
	@yield('contenido')
	@include('tienda.secciones.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{asset('js/pinterest_grid.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>