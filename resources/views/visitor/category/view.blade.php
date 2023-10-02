@extends('layout')

@section('title', $category->name.'|RedLantern')

@section('css')
<link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/red_lantern.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
@endsection

<?php
$Customer = new \App\Helpers\Login\Customer();
$Pagination = new \App\Helpers\Navigation\Pagination();
$itemsPagination = $Pagination->getItems();
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
                                            <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                                            <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
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
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid mt-4 privileges-scorts">
            <div class="group">
                <div class="item" style="background-image: url(https://bo-static.imgskk.com/post/28/4b/284b0d5471da441fbb1aaa9d493211e9.jpg?listing=supertop_stories_thumb&amp;v=84ssm3xe)"></div>
                <div class="item" style="background-image: url(https://bo-static.imgskk.com/post/20/a2/20a25f79ae604f47bc81389da8cb5da5.jpg?listing=supertop_stories_thumb&amp;v=84ssm3xe)"></div>
                <div class="item" style="background-image: url(https://bo-static.imgskk.com/post/84/c4/84c4dabb8c61420f8de5b05c400f413a.jpg?listing=supertop_stories_thumb&amp;v=84ssm3xe)"></div>
                <div class="item" style="background-image: url(https://bo-static.imgskk.com/post/1d/f7/1df70c716b2d4df594d297459bedf7ea.jpg?listing=supertop_stories_thumb&amp;v=84ssm3xe)"></div>
                <div class="item" style="background-image: url(https://bo-static.imgskk.com/post/f1/fd/f1fd8feb31614dd98129eff729a1dbdc.jpg?listing=supertop_stories_thumb&amp;v=84ssm3xe)"></div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid mt-4">
            <div class="container">
                <div class="row-red-lanter mb-4">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <h6 class="text-start">24 de Septiembre - 24 de Septiembre</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
        
            @if(count($itemsPagination) > 0)
                @foreach($itemsPagination as $item)
                    <div class="content-feed">
                        <div class="content-picutre">

                        </div>
                        <div class="content-feel">
                            <div class="row-red-lanter">
                                <div class="row row-cols-1 row-cols-md-1 g-4">
                                    <div class="col no-padding no-margin">
                                        <div class="content-flex">
                                            <div class="content-picture">
                                                <img class="picture" src="https://bo-static.imgskk.com/post/24/e3/24e3b967579242a88e18003fb6b93136.jpg?listing=top&amp;v=84ssm3xe" loading="lazy">
                                            </div>
                                            <div class="content-body">
                                                <div class="section-body">
                                                    <strong>AliasScort</strong>
                                                </div>
                                                <div class="section-body">
                                                    <small>2023-10-01 - 2h</small>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="body-scort">
                                            <a href="#">
                                                <h4>{{ $item->title; }}</h4>
                                            </a>
                                            <p>
                                                <span>{{ $item->body; }}</span>
                                            </p>
                                        </div>
                                        <div class="body-scort">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1>Sin items</h1>
            @endif
        </div>

        <div class="jumbotron jumbotron-fluid mt-4 privileges-scorts">
            <div class="container force-content">
                <div class="row-red-lanter mb-4">
                    <div class="row row-cols-1 row-cols-md-1 g-4 no-padding no-margin">
                        
                        <div class="col no-padding no-margin">
                            <div class="last-post-category">
                                <div class="content-info-carrousel">
                                    <main class="no-padding no-margin">
                                        <div class="content">
                                            <h2>Welcome to Online Book Store</h2>
                                            <p>GO BEATCH.</p>
                                            <button class="btn">
                                                Go to Collections <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>

                                        <div class="swiper-container">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide swiper-slide--one">
                                                        <span>bestseller</span>
                                                        <div class="slide-content">
                                                            <h3>The Raven</h3>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide swiper-slide--two">
                                                        <span>bestseller</span>
                                                        <div class="slide-content">
                                                            <h3>Mademoiselle</h3>
                                                            <p>epic drama</p>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide swiper-slide--three">
                                                        <span>bestseller</span>
                                                    </div>
                                                    <div class="swiper-slide swiper-slide--four">
                                                        <span>bestseller</span>
                                                    </div>
                                                    <div class="swiper-slide swiper-slide--five">
                                                        <span>bestseller</span>
                                                    </div>
                                                    <div class="swiper-slide swiper-slide--six">
                                                        <span>bestseller</span>
                                                        <div class="slide-content">
                                                            <h3>Woman in the dark</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination mtop-5">
                                            </div>
                                        </div>
                                        <div class="circle">
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid mt-4">
            <div class="container">
                <div class="row-red-lanter mb-4">
                    <div class="row row-cols-1 row-cols-md-1 g-4">

                        <div class="col">
                            <div class="last-post-category">

                                <ul class="last-scroll" id="c"> 
            
                                    <li class="item-scroll"><p><strong>1</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>2</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>3</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>4</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>

                                    <li class="item-scroll"><p><strong>5</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>6</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>7</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>8</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li> 

                                    <li class="item-scroll"><p><strong>9</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>10</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>11</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                                    <li class="item-scroll"><p><strong>12</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li> 

                                </ul>

                            </div>
                        </div>

                        <div class="col">
                            <div class="last-post-category">

                                <div class="Scorts-InfiniteScroll">
                                    <div class="container" id="ScortsInfiniteScroll">
                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>
                                        
                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>

                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>

                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>

                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>

                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>

                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>
                                        
                                        <article>
                                            <div class="wrapper">
                                                <div class="img"></div>
                                                <div class="content">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </article>
                                        
                                        
                                    </div>
                                </div>

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
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{ asset(env('PUBLIC_PATH').'js/header_visitor.js') }}"></script>
@endsection