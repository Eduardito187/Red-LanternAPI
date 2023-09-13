@extends('layout')

@section('title', 'Error 403 - Acceso prohibido')

@section('content')
    <body class="body-error">
        <div class="container-error">
            <img src="{{ asset('public/image/logo.png') }}" class="image-error" alt="Error 403" />
            <h1>Error 403 - Acceso prohibido</h1>
            <p>Lo sentimos, no tienes permiso para acceder a esta página.</p>
            <p>Puedes volver a <a href="/">la página de inicio</a> o ponerte en contacto con el administrador del sitio para obtener acceso.</p>
        </div>
    </body>
@endsection