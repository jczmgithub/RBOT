@extends('layouts.default')
@section('huecoNav')
    @auth
        <li><a href={{ route('home') }}>Control</a></li>
    @endauth
@endsection
@section('home')
    {{--TODO Comprobar permisos del admin robot para que le saque el formulario--}}
    <div class="contenidoLogin container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-info">
                                <li>{{ session('status') }}</li>
                            </div>
                        @endif


                            @include("user.includes.tablaUsuarios")

                    </div>
                </div>
            </div>
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

