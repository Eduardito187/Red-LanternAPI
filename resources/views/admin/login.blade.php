@extends('layout')

@section('title', 'Login|RedLantern')

@section('css')
    <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/login.css') }}">
@endsection

@section('content')
    <body class="body-login">
        <div class="container">
            <h1>Iniciar Sesión</h1>
            <form action="{{ route('ValidateLogin') }}" method="POST">
                @csrf
                <div class="input-container">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" minlength="5" required>
                </div>
                <div class="input-container">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" minlength="5" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </body>
@endsection

@section('scripts')
    <script src="{{ asset(env('PUBLIC_PATH').'js/login.js') }}"></script>
@endsection