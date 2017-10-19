<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
    @include('layouts.entrar')
    @include('layouts.registrar')
</header>
<body>
<div class="container-fluid">
    <div id="main">
        @yield('home')
    </div>
</div>
</body>
@include('includes.footer')
</html>