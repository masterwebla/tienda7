<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Categorias<span class="sr-only">(current)</span></a>
        </li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Usuarios</a></li>
        <li class="dropdown">
          <a href="{{url('/login')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/login')}}">Iniciar Sesión</a></li>
            <li><a href="{{url('/register')}}">Registrarse</a></li>
          </ul>
 </li>
      </ul>
    </div>
  </div>
</nav>