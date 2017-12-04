<body data-spy="scroll" data-target=".navbar" data-offset="50">
@include('landing.layouts.nav')

<div id="main">
    @yield('home')
</div>

@include('landing.layouts.footer')
</body>