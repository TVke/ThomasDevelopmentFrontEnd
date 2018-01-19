@extends('layout')
@section('content')
    <figure class="spotlight">
        <img src="{{ asset('img/hero 1.jpg') }}" alt="{{ __('general.image-alt') }}">
        <figcaption>
            <div class="content">
                <h4>{{ __('general.item') }}</h4>
                <p>{{ __('general.details') }}</p>
                <p><strong>{{ __('general.price') }}</strong>: €299,99</p>
                <button>{{ __('general.call-to-auction') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
            </div>
        </figcaption>
    </figure>
    <nav class="breadcrumbs">
        <ul>
            <li><a href="{{ route('home') }}">{{ __('general.bread-home') }}</a></li>
            <li><a href="{{ route('FAQ') }}">{{ __('general.bread-FAQ') }}</a></li>
        </ul>
    </nav>
    <h2>{{ __('FAQ.title') }}</h2>
    <div class="questions">
        <div>
            <a href="#bid">{{ __('FAQ.q-bid') }}</a>
            <a href="#sell">{{ __('FAQ.q-sell') }}</a>
        </div>
        <div>
            <a href="#buy">{{ __('FAQ.q-buy') }}</a>
            <a href="#register">{{ __('FAQ.q-register') }}</a>
        </div>
        <div>
            <a href="#question">{{ __('FAQ.q-question') }}</a>
            <a href="#watch">{{ __('FAQ.q-watch') }}</a>
        </div>
        <div>
            <a href="#watchlist">{{ __('FAQ.q-watchlist') }}</a>
        </div>
        <button>{{ __('general.ISEARCH') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
    </div>
    <div class="answers">
        <section id="bid">
            <h3>{{ __('FAQ.q-bid') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
        <section id="sell">
            <h3>{{ __('FAQ.q-sell') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
        <section id="buy">
            <h3>{{ __('FAQ.q-buy') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
        <section id="register">
            <h3>{{ __('FAQ.q-register') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
        <section id="question">
            <h3>{{ __('FAQ.q-question') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link-search') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
        <section id="watch">
            <h3>{{ __('FAQ.q-watch') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
        <section id="watchlist">
            <h3>{{ __('FAQ.q-watchlist') }}</h3>
            <p>
                {{ __('FAQ.a-first') }}
                <strong>{{ __('FAQ.a-bold') }}</strong>
                {{ __('FAQ.a-middle') }}
                <a href=".">{{ __('FAQ.a-link') }}</a>
                {{ __('FAQ.a-last') }}
            </p>
        </section>
    </div>
@endsection