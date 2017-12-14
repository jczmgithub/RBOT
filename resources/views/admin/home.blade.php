@extends('layouts.defaultAdmin')

@section('huecoNav')
    <li><a href="#" onclick="openNav()">Menu</a></li>
@endsection

@section('home')

    @include('layouts.aside')

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in, {{ Auth::user()->name }}!
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @include('admin.tabs.crearUsuario')

            @include('admin.tabs.modificarUsuario')

            @include('admin.tabs.borrarUsuario')
        </div>

    </div>

@endsection

