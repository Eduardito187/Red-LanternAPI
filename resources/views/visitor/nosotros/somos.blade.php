@extends('layout')

@section('title', 'Quienes somos|RedLantern')

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
        <div class="jumbotron jumbotron-fluid mt-4">
            <div class="container">
                <div class="row-red-lanter mb-4">
                    <div class="row row-cols-1 row-cols-md-1 g-4">
                        <div class="col">
                            <div class="last-post-category">


                            </div>
                        </div>
                    </div>
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