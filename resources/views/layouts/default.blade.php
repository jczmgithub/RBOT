<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
</header>
<body>
    <div id="main">
        @yield('home')
    </div>
</body>
@include('includes.footer')
</html>