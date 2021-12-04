<nav>
    <div class="nav-wrapper blue darken-1">
        <a href="{{route('inicio')}}" class="brand-logo">PoderJudicial</a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('admin.lista.productos')}}">Lista Productos</a></li>

            <li><a href="{{route('admin.lista.facturas')}}">Lista Facturas</a></li>

            <li><a href="{{route('user.ver.productos')}}">Comprar</a></li>

            @if (Auth::guest())
            <li><a href="{{route('mostar.registro')}}">Registro</a></li>
            <li><a href="{{route('mostar.login')}}">Login</a></li>
            @else
            <li> {{ Auth::user()->email }}</li>
            <li><a href="{{route('logout')}}">logout</a></li>
            @endif
        </ul>
    </div>
</nav>