
<header id="header-red-lantern" class="red-lantern-header">
    <div class="logo">
        <img src="{{ asset(env('PUBLIC_PATH').'image/logo.png') }}" alt="Logo de la empresa">
    </div>
    <button type="button" class="btn btn-primary btn-mobile-action" data-bs-toggle="modal" data-bs-target="#loginModal">
        ☰
    </button>
    <nav class="red-lantern-nav">
        <ul class="menu">
            <li>
                <a href="#">Inicio</a>
            </li>
            <li class="dropdown">
                <a href="#">Opciones</a>
                <ul class="submenu">
                    <li class="options">
                        <a class="option" href="#">Opción 1</a>
                    </li>
                    <li class="options">
                        <a class="option" href="#">Opción 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="cta-buttons">
        <a class="cta-button" href="#">Iniciar sesión</a>
        <a class="cta-button" href="#">Registrarse</a>
    </div>
</header>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">
                    <a href="/">
                        <img class="icon-page-100" src="{{ asset(env('PUBLIC_PATH').'image/logo.png') }}" >
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="menu mb-4">
                    <div class="section-max">
                        <a href="#" class="btn-action-login">Inicio</a>
                    </div>

                    <div class="section-max-dropdown">
                        <div class="section-max">
                            <a href="#" class="btn-action-login">Opciones</a>
                        </div>
                        <div class="collapsed-custom">
                            <div class="section-max">
                                <a class="btn-action-login" href="#">Opción 1</a>
                            </div>
                            <div class="section-max">
                                <a class="btn-action-login" href="#">Opción 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-red-lanter">
                    <a href="#" class="btn-action-login">Iniciar sesión</a>
                </div>
                <div class="separation-content">
                    <div class="separation-content-left">
                        <hr>
                    </div>
                    <div class="separation-content-center">
                        <span>o</span>
                    </div>
                    <div class="separation-content-right">
                        <hr>
                    </div>
                </div>
                <div class="row-red-lanter">
                    <a href="#" class="btn-action-login">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
</div>