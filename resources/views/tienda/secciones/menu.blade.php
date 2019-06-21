<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('inicio') }}"><img src="{{ asset('img/logo.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('carrito') }}"><i class="fa fa-shopping-cart"></i></a></li>
        <li class="active"><a href="#">Productos<span class="sr-only">(current)</span></a>
        </li>
        <li><a href="#">Nosotros</a></li>
        <li class="active"><a href="#">Contacto<span class="sr-only">(current)</span></a>
        </li>
        @include('tienda.secciones.menu-usuario')
      </ul>
    </div>
  </div>
</nav>