<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="footer-copyright">
                <p>© 2017/2018 Grupo Rbot</p>
            </div>
        </div>
    </div>

    @if(Request::root() == 'https://calm-brushlands-53384.herokuapp.com')
        {!! HTML::style('css/layouts/admin/footer.css', array(), true) !!}
    @else
        {!! HTML::style('css/layouts/admin/footer.css') !!}
    @endif

</footer>