<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1 class="logo">RBOT Industries</h1>
            </div>
            <div class="col-sm-4">
                <h5>Empresa Colaboradora</h5>
                <ul>
                    <li><a href="https://domotek.es/" target="_blank">Empresa Domotek</a></li>
                    <li><a href="http://www.zubirimanteo.hezkuntza.net/web/guest/inicio" target="_blank">Zubiri-Manteo</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <div class="social-networks">
                    <a href="https://twitter.com/" target="_blank" class="twitter"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.facebook.com/" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
                    <a href="https://www.pinterest.com/" target="_blank" class="pinterest"><span class="fa fa-pinterest"></span></a>
                    <a href="https://www.instagram.com/" target="_blank" class="instagram"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.youtube.com/" target="_blank" class="youtube"><span class="fa fa-youtube"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2017/2018 - Grupo Rbot</p>
    </div>

    @if(Request::root() == 'https://calm-brushlands-53384.herokuapp.com')
        {!! HTML::style('/css/layouts/footer.css', array(), true) !!}
    @else
        {!! HTML::style('/css/layouts/footer.css') !!}
    @endif

</footer>