<aside>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br>
        <a href="#" class="tablinks" onclick="openTab(event, 'Home')">Home</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'modificarUsu')">Administrar usuarios</a>
        <a href="#">Administrar robots</a>

    </div>

    @if(Request::root() == 'http://calm-brushlands-53384.herokuapp.com')
        {!! HTML::style('css/layouts/aside.css', array(), true) !!}
        {!! HTML::script('js/layouts/aside.min.js', array(), true); !!}
    @else
        {!! HTML::style('css/layouts/aside.css') !!}
        {!! HTML::script('js/layouts/aside.min.js'); !!}
    @endif

</aside>