@extends('layout')

@section('title', 'Categoría no encontrada|RedLantern')

@section('css')
    <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/red_lantern.css') }}">
@endsection

@section('content')
    <body>
        @include('visitor/header/header')
        <section class="content-page">
            <div class="content-max-width">
                <img class="content-max-width" src="{{ asset(env('PUBLIC_PATH').'image/404.png') }}" alt="Página no encontrada">
            </div>
        </section>
        
        <div class="loader">
            <img src="{{ asset(env('PUBLIC_PATH').'image/loader.gif') }}" alt="Cargando...">
        </div>
    </body>
@endsection

@section('scripts')
    <script src="{{ asset(env('PUBLIC_PATH').'js/header_visitor.js') }}"></script>
@endsection