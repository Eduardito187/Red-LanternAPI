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
            <div class="jumbotron jumbotron-fluid mt-4">
                <div class="container">
                    <div class="row-red-lanter mb-4">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <h1 class="text-start">{{ $category->name; }}</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $category->name; }}</li>
                                    </ol>
                                </nav>
                                <h6 class="text-start">Escorts en {{ $Customer->getStoreName(); }}</h6>
                            </div>
                            
                            <div class="col">
                                <main class="main">
                                    <div class="container">
                                        <div class="search-box">
                                            <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                                            <form action="" class="search-form">
                                                <input type="text" placeholder="Buscador" id="search" autocomplete="off">
                                            </form>
                                            <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;" xml:space="preserve">
                                                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
                                                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
                                            </svg>
                                            <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </main>
                                <div class="row mt-4">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">5</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-red-lanter">
                    </div>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid mt-4 privileges-scorts">
                <div class="group">
                    <div class="item" style="background-image: url(https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cG9ydHJhaXR8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60)"></div>
                    <div class="item" style="background-image: url(https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cG9ydHJhaXR8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60)"></div>
                    <div class="item" style="background-image: url(https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cG9ydHJhaXR8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60)"></div>
                    <div class="item" style="background-image: url(https://images.unsplash.com/photo-1554151228-14d9def656e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHBvcnRyYWl0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60)"></div>
                    <div class="item" style="background-image: url(https://images.unsplash.com/photo-1543357530-d91dab30fa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTN8fHBvcnRyYWl0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60)"></div>
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