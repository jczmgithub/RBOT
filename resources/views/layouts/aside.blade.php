<aside>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br>
        <a href="#" class="tablinks" onclick="openTab(event, 'Home')">Home</a>
        <a href="#" class="tablinks" onclick="openTab(event, 'modificarUsu')">Administrar usuarios</a>
        <a href="#">Administrar robots</a>

    </div>

    {!! HTML::style('css/layouts/aside.css') !!}
    {!! HTML::script('js/layouts/aside.min.js'); !!}

    {{--{!! HTML::style('css/layouts/aside.css', array(), true) !!}--}}
    {{--{!! HTML::script('js/layouts/aside.min.js', array(), true); !!}--}}

</aside>