<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
    @include('auth.login')
    @include('auth.register')
</header>
<body>
    <div id="main">
        @yield('home')
    </div>
</body>
@include('includes.footer')
</html>