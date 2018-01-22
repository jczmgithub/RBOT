@extends('layouts.admin.default')

@section('huecoNav')
    <li><a href="#" onclick="openNav()">Menu</a></li>
@endsection

@section('home')

    @include('layouts.aside')

    <div class="container">
        <div class="row">
            @include('admin.tabs.home')
            @include('admin.tabs.modificarUsuario')
            @include('admin.tabs.modificarRobot')
        </div>
    </div>

@endsection

