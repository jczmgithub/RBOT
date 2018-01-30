@extends('layouts.default')

@section('huecoNav')

    @auth
        @if(Auth::user()->isOwner())
        <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Usuarios <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/user/registrarUser">Crear Usuarios</a></li>
                <li><a href="/user/verUser">Ver Usuarios</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Robots <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/user/registrarRobot">Crear Robots</a></li>
                <li><a href="/user/verUser">Ver Robots</a></li>
            </ul>
        </li>
        @endif
    @endauth

@endsection

@section('home')

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

    <div id="panelControl" class="container">

        <div class="row">

        @include('user.columnas.ayudasVisuales')

        @include('user.columnas.controlInterfaz')

        </div>

    </div>

    @if(str_contains(Request::fullUrl(), 'herokuapp'))
        {!! HTML::style('css/user/home.css', array(), true) !!}
        {!! HTML::script('js/user/home.min.js', array(), true); !!}
    @else
        {!! HTML::style('css/user/home.css') !!}
        {!! HTML::script('js/user/home.js'); !!}
    @endif

@stop
