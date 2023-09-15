@extends('layout')

@section('title', 'Error 401 - No autorizado')

@section('content')
    <body class="body-error">
        <div class="container-error">
            <img src="{{ asset('public/image/logo.png') }}" class="image-error" alt="Error 401" />
            <h1>Error 401 - No autorizado</h1>
            <?php
            $environment = config('app.env');

            if ($environment === 'local') {
                echo "localhost";
            } elseif ($environment === 'development') {
                echo "desarrollo";
            } elseif ($environment === 'production') {
                echo "producción";
            } else {
                echo "personalizado";
            }
            ?>
            <p>Lo sentimos, no tienes permiso para acceder a esta página.</p>
            <p>Puedes volver a <a href="/">la página de inicio</a> o ponerte en contacto con el administrador del sitio para obtener acceso.</p>
        </div>
    </body>
@endsection