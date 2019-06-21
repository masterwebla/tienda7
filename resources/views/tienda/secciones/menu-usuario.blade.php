@if (Auth::check())
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <i class="fa fa-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/logout')}}"
				onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            Cerrar Sesión</a></li>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
            </form>
          </ul>
 </li>
 @else
 <li class="dropdown">
          <a href="{{url('/login')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/login')}}">Iniciar Sesión</a></li>
            <li><a href="{{url('/register')}}">Registrarse</a></li>
          </ul>
 </li>
	
 @endif