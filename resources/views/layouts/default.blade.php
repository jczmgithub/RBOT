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
    <div id="main">
        @yield('home')
    </div>
</body>
@include('includes.footer')
</html>