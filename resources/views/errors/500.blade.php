@extends('layout')

@section('title', 'Error 500 - Error interno del servidor')

@section('content')
    <body class="body-error">
        <div class="container-error">
            <img src="{{ asset(env('PUBLIC_PATH').'image/logo.png') }}" class="image-error" alt="Error 500" />
            <h1>Error 500 - Error interno del servidor</h1>
            <p>Lo sentimos, algo salió mal en el servidor y no podemos procesar tu solicitud en este momento.</p>
            <p>Puedes volver a <a href="/">la página de inicio</a> o intentar nuevamente más tarde.</p>
        </div>
    </body>
@endsection