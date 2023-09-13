@extends('layout')

@section('title', 'Error 401 - No autorizado')

@section('content')
    <body class="body-error">
        <div class="container-error">
            <img src="{{ asset('image/logo.png') }}" class="image-error" alt="Error 401" />
            <h1>Error 401 - No autorizado</h1>
            <p>Lo sentimos, no tienes permiso para acceder a esta página.</p>
            <p>Puedes volver a <a href="/">la página de inicio</a> o ponerte en contacto con el administrador del sitio para obtener acceso.</p>
        </div>
    </body>
@endsection