@extends('layout')
@section('content')
    <div class="carousel">
        <nav>
            <a href="." class="prev"><img src="{{ asset('img/icons/pijltje_links.svg') }}" alt="{{ __('home.previous') }}"></a>
            <a href="." class="next"><img src="{{ asset('img/icons/pijltje_rechts.svg') }}" alt="{{ __('home.next') }}"></a>
            <ul>
                <li><a href="."></a></li>
                <li class="active"><a href="."></a></li>
                <li><a href="."></a></li>
                <li><a href="."></a></li>
            </ul>
        </nav>
        <p class="content">{{ __('home.carousel-content') }}</p>
        <img src="{{ asset('img/carousel/image 1.jpg') }}" alt="{{ __('home.carousel-image1') }}">
        <img class="shown" src="{{ asset('img/carousel/image 2.jpg') }}" alt="{{ __('home.carousel-image2') }}">
        <img src="{{ asset('img/carousel/image 3.jpg') }}" alt="{{ __('home.carousel-image3') }}">
        <img src="{{ asset('img/carousel/image 4.jpg') }}" alt="{{ __('home.carousel-image4') }}">
        <noscript>{{ __('home.noJS') }}</noscript>
    </div>
    <section>
        <h2>{{ __('home.title-1') }}</h2>
        <div class="icons">
            <section>
                <img src="{{ asset('/img/icons/pen.png') }}" alt="{{ __('home.icon-alt-1') }}">
                <h3>{{ __('home.icon-title-1') }}</h3>
                <p>{{ __('home.icon-text-1') }}</p>
            </section>
            <section>
                <img src="{{ asset('/img/icons/vinkje.png') }}" alt="{{ __('home.icon-alt-2') }}">
                <h3>{{ __('home.icon-title-2') }}</h3>
                <p>{{ __('home.icon-text-2') }}</p>
            </section>
            <section>
                <img src="{{ asset('/img/icons/smile.png') }}" alt="{{ __('home.icon-alt-3') }}">
                <h3>{{ __('home.icon-title-3') }}</h3>
                <p>{{ __('home.icon-text-3') }}</p>
            </section>
        </div>
    </section>
    <section class="switch">
        <h2>{{ __('home.title-2') }} <a href="." class="open"><img src="{{ asset('/img/icons/gesloten_pijl.svg') }}" alt="{{ __('home.title-2-img-alt') }}"></a></h2>
        <div class="open first">
            <div>
                <a href="."><img src="{{ asset('/img/icons/left top.png') }}" alt="{{ __('home.left-top-alt') }}"></a>
                <a href="."><img src="{{ asset('/img/icons/left bottom.png') }}" alt="{{ __('home.left-bottom-alt') }}"></a>
            </div>
            <a href="."><img src="{{ asset('/img/icons/right.png') }}" alt="{{ __('home.right-alt') }}"></a>
        </div>
        <div class="second">
            <a href="."><img src="{{ asset('/img/icons/left top.png') }}" alt="{{ __('home.left-top-alt') }}"></a>
            <a href="."><img src="{{ asset('/img/icons/left bottom.png') }}" alt="{{ __('home.left-bottom-alt') }}"></a>
            <a href="."><img src="{{ asset('/img/icons/right.png') }}" alt="{{ __('home.right-alt') }}"></a>
        </div>
    </section>
@endsection