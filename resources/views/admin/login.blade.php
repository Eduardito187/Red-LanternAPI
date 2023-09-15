@extends('layout')

@section('title', 'Login|RedLantern')

@section('css')
    <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/login.css') }}">
@endsection

@section('content')
    <body class="body-login">
        <div class="container">
            <h1>Iniciar Sesión</h1>
            <form id="login-form">
                <div class="input-container">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                    <p id="username-error" class="error-message"></p>
                </div>
                <div class="input-container">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <p id="password-error" class="error-message"></p>
                </div>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </body>
@endsection

@section('scripts')
    <script src="{{ asset(env('PUBLIC_PATH').'js/login.js') }}"></script>
@endsection