    <footer class="bd-footer py-5 mt-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-2 mb-3">
                    <a href="/">
                        <img class="icon-page" src="{{ asset(env('PUBLIC_PATH').'image/logo.png') }}" >
                    </a>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <h5>Acerca de RedLantern</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="link-text" href="/">Quienes somos</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-text" href="/docs/5.0/">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <h5>Atención al cliente</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="link-text" href="/docs/5.0/getting-started/">Ayuda</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-text" href="/docs/5.0/examples/starter-template/">Términos y condiciones</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-text" href="/docs/5.0/examples/starter-template/">Preguntas frecuentes</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-text" href="/docs/5.0/examples/starter-template/">Políticas de privacidad</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-text" href="/docs/5.0/examples/starter-template/">Promociona tu anuncio</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <h5>Redes sociales</h5>
                    <div class="section-flex">
                        <div class="divider-tree">
                            <a href="#">
                                <i class="fa fa-youtube-square color-red-lantern icon-footer"></i>
                            </a>
                        </div>
                        <div class="divider-tree">
                            <a href="#">
                                <i class="fa fa-facebook-square color-red-lantern icon-footer"></i>
                            </a>
                        </div>
                        <div class="divider-tree">
                            <a href="#">
                                <i class="fa fa-instagram color-red-lantern icon-footer"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset(env('PUBLIC_PATH').'js/app.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/popper/popper.min.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/bootstrap/bootstrap.min.js') }}"></script>
    @yield('scripts')
</html>