@extends('layout')

@section('title', 'Home|RedLantern')

@section('css')
    <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/red_lantern.css') }}">
@endsection

<?php
$Customer = new \App\Helpers\Login\Customer();
?>

@section('content')
    <body>
        @include('visitor/header/header')
        <section class="content-page">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row-red-lanter">
                        <h1 class="text-start">{{ $category->name; }}</h1>
                    </div>
                    <div class="row-red-lanter">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $category->name; }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row-red-lanter">
                        <h6 class="text-start">Escorts en {{ $Customer->getStoreName(); }}</h6>
                    </div>
                    <div class="row-red-lanter">
                    </div>
                </div>
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