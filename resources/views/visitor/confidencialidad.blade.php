@extends('layout')

@section('title', 'Seguridad|RedLantern')

@section('css')
    <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/red_lantern.css') }}">
@endsection

@section('content')
    <body>
        @include('visitor/header/header')
        

        <div class="row-red-lanter">
                <h2>Confidencialidad</h2>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row-red-lanter">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Protección de la información personal:</h5>
                                        <p class="card-text">Asegúrate de que la información personal de las personas que utilizan el sitio, ya sean escorts o clientes, esté protegida adecuadamente. Esto incluye nombres, direcciones, números de teléfono y cualquier otra información sensible. Utiliza cifrado SSL para proteger las comunicaciones entre el usuario y el sitio.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Privacidad de los usuarios:</h5>
                                        <p class="card-text">Debes tener una política de privacidad clara y transparente que explique cómo se recopila, almacena y utiliza la información personal de los usuarios. Los usuarios deben dar su consentimiento explícito para cualquier recopilación de datos y deben poder optar por no participar si lo desean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Verificación de identidad:</h5>
                                        <p class="card-text">Si es relevante en tu sitio, establece un proceso de verificación de identidad para las escorts y los clientes. Esto puede ayudar a aumentar la confianza y la seguridad en la plataforma.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Lucha contra el acoso y el abuso:</h5>
                                        <p class="card-text">Implementa políticas y herramientas para prevenir y abordar el acoso, el abuso o cualquier comportamiento inapropiado en la plataforma. Los usuarios deben poder informar incidentes y recibir una respuesta adecuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Edad legal:</h5>
                                        <p class="card-text">Asegúrate de que los usuarios sean mayores de edad según las leyes locales aplicables. Esto puede requerir verificación de edad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Cumplimiento legal:</h5>
                                        <p class="card-text">Investiga y cumple con todas las leyes y regulaciones locales, estatales y federales relacionadas con los servicios de escorts y el contenido para adultos. Esto puede incluir la verificación de la edad, la gestión de contenido para adultos y otras regulaciones específicas de la industria.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Protección contra la trata de personas:</h5>
                                        <p class="card-text">Implementa políticas y procedimientos para detectar y prevenir la trata de personas y la explotación. Colabora con las autoridades en caso de que surjan preocupaciones legales o éticas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Protección de datos:</h5>
                                        <p class="card-text">Cumple con las regulaciones de protección de datos, como el Reglamento General de Protección de Datos (RGPD) en la Unión Europea, si tu sitio tiene usuarios en esa región.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">Seguridad de la plataforma:</h5>
                                        <p class="card-text">Mantén la plataforma actualizada y asegúrate de que esté protegida contra vulnerabilidades de seguridad conocidas. Realiza auditorías de seguridad periódicas y sigue las mejores prácticas de desarrollo seguro.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="loader">
            <img src="{{ asset(env('PUBLIC_PATH').'image/loader.gif') }}" alt="Cargando...">
        </div>
    </body>
@endsection

@section('scripts')
    <script src="{{ asset(env('PUBLIC_PATH').'js/header_visitor.js') }}"></script>
@endsection