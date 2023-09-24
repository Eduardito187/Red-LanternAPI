@extends('layout')

@section('title', 'Home|RedLantern')

@section('css')
    <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/red_lantern.css') }}">
@endsection

@section('content')
    <body>
        @include('visitor/header/header')
        <section class="content-page">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset(env('PUBLIC_PATH').'image/carrousel/img1.jpg') }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset(env('PUBLIC_PATH').'image/carrousel/img2.jpg') }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset(env('PUBLIC_PATH').'image/carrousel/img3.jpeg') }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset(env('PUBLIC_PATH').'image/carrousel/img4.jpeg') }}" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="content-centered">
                    <div class="options-centered mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <a href="/seguridad" class="link-text">
                                        <i class="fa fa-lock color-red-lantern icon-section"></i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="/seguridad" class="link-text">
                                        <span class="title-option">Seguridad</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <a href="/privacidad" class="link-text">
                                        <i class="fa fa-user-secret color-red-lantern icon-section"></i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="/privacidad" class="link-text">
                                        <span class="title-option">Privacidad</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <a href="/confidencialidad" class="link-text">
                                        <i class="fa fa-shield color-red-lantern icon-section"></i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a href="/confidencialidad" class="link-text">
                                        <span class="title-option">Confidencialidad</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($home_introduction_status)
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        {!! $home_introduction_status_html; !!}
                    </div>
                </div>
            @endif
            @if(count($category) > 0)
                <div class="row-red-lanter">
                    <h2>Nuestros anuncios</h2>
                </div>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="row-red-lanter">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                @foreach($category as $cat)
                                    <div class="col">
                                        <div class="card">
                                            <a href="/category/{{ $cat->url; }}" class="link-text content-link">
                                                <img src="{{ asset(env('PUBLIC_PATH').$cat->Picture->url); }}" class="card-img-category">
                                            </a>
                                            <div class="card-body text-start">
                                                <a href="/category/{{ $cat->url; }}" class="link-text">
                                                    <h5 class="card-title">{{ $cat->name; }}</h5>
                                                </a>
                                                <div class="row">{!! $cat->content_html; !!}</div>
                                            </div>
                                            <div class="list-group text-start">
                                                @foreach($cat->CityCategory as $cityCategory)
                                                    <a href="/category/{{ $cat->url.'?_store='.$cityCategory->City->code; }}" class="list-group-item list-group-item-action">{{ $cityCategory->City->name; }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($home_end_status)
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        {!! $home_end_status_html; !!}
                    </div>
                </div>
            @endif
        </section>
        
        <div class="loader">
            <img src="{{ asset(env('PUBLIC_PATH').'image/loader.gif') }}" alt="Cargando...">
        </div>
    </body>
@endsection

@section('scripts')
    <script src="{{ asset(env('PUBLIC_PATH').'js/header_visitor.js') }}"></script>
@endsection