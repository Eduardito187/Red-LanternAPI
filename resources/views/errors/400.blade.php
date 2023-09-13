@extends('layout')

@section('title', 'Error 400 - Solicitud incorrecta')

@section('content')
    <body class="body-error">
        <div class="container-error">
            <img src="{{ asset('public/image/logo.png') }}" class="image-error" alt="Error 400" />
            <h1>Error 400 - Solicitud incorrecta</h1>
            <p>Lo sentimos, la solicitud que has realizado es incorrecta o incompleta.</p>
            <p>Puedes volver a <a href="/">la página de inicio</a> o verificar la información que has proporcionado.</p>
        </div>
    </body>
@endsection