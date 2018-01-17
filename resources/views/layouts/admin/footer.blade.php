<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="footer-copyright">
                <p>© 2017/2018 Grupo Rbot</p>
            </div>
        </div>
    </div>

    @if(str_contains(Request::fullUrl(), 'herokuapp'))
        {!! HTML::style('css/layouts/admin/footer.css', array(), true) !!}
    @else
        {!! HTML::style('css/layouts/admin/footer.css') !!}
    @endif

</footer>