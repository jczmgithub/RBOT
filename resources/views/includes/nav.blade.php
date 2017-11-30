<nav class="navbar navbar-default navbar-fixed-top arreglar-nav" id="navegador">

    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img class="icon-bar" id="logo" src="/img/domotek-logo.png">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="/">Inicio</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Características
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="RBX1">Robot</a></li>
                        <li><a href="controlManual">Mando</a></li>
                        <li><a href="controlBotones">Funciones</a></li>
                    </ul>
                </li>
                <li><a href="contact">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Entrar</a></li>
                    <li><a href="{{ route('register') }}">Registrar</a></li>
                    @else
                        @if(Auth::guard('admin')->check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('admin.logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('admin-logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                @endguest
            </ul>
            </ul>
        </div>
    </div>
</nav>

{!! HTML::script('js/includes/nav.js'); !!}