@extends('layout')

@section('title', 'Error 404 - Página no encontrada')

@section('content')
    <body class="body-error">
        <div class="container-error">
            <img src="{{ asset(env('PUBLIC_PATH').'image/logo.png') }}" class="image-error" alt="Error 404" />
            <h1>Error 404 - Página no encontrada</h1>
            <p>Lo sentimos, la página que estás buscando no existe.</p>
            <p>Puedes volver a <a href="/">la página de inicio</a> o intentar buscar otra información.</p>
        </div>
    </body>
@endsection