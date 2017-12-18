@extends('layouts.defaultAdmin')

@section('huecoNav')
    <li><a href="#" onclick="openNav()">Menu</a></li>
@endsection

@section('home')

    @include('layouts.aside')

    <div class="container">

        <div class="row">
            @include('admin.tabs.home')

            @include('admin.tabs.crearUsuario')

            @include('admin.tabs.modificarUsuario', ['users' => 'User::all()'])

            @include('admin.tabs.borrarUsuario')
        </div>

    </div>

@endsection

