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
    <div class="specifics">
        <nav class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">{{ __('general.bread-home') }}</a></li>
                <li><a href="{{ route('myauctions') }}">{{ __('general.bread-auctions') }}</a></li>
                <li><a href=".">{{ __('general.bread-salvador') }}</a></li>
                <li><a href=".">{{ __('general.bread-dance') }}</a></li>
            </ul>
        </nav>
        <p>{{ __('details.lot-id',['id'=>'84611']) }}</p>
    </div>
    <section>
        <h2>{{ __('details.article-title') }}</h2>
        <div class="bid-info">
            <time>25d 14u 44m </time><p>(7 {{ trans_choice('details.bid-count',7) }}) <img src="{{ asset('.img/icons/menu.svg') }}" alt="{{ __('general.menu-alt') }}"></p>
        </div>
        <figure>
            <img src="{{ asset('/img/details/1.jpg') }}" alt="{{ __('details.image-1') }}">
        </figure>
        <nav>
            <ul>
                <li><img src="{{ asset('/img/details/1.jpg') }}" alt="{{ __('details.image-1') }}"></li>
                <li><img src="{{ asset('/img/details/2.jpg') }}" alt="{{ __('details.image-2') }}"></li>
                <li><img src="{{ asset('/img/details/3.jpg') }}" alt="{{ __('details.image-3') }}"></li>
            </ul>
        </nav>
    </section>
    <aside>
        <div class="heading">
            <h2>{{ __('details.article-title') }}</h2>
            <p>1979, {{ __('general.bread-salvador') }}</p>
        </div>
        <div class="time-details">
            <time>25d 14u 44m {{ __('details.time-left') }}</time>
            <time>September 09, 2013, 13:00 p.m. (EST)</time>
        </div>
        <div class="short-description">
            <p>{{ __('short-description') }}</p>
            <a href=".">{{ __('details.more') }}</a>
        </div>
    </aside>
    <div class="cart">
        <p>{{ __('details.estimated') }}</p>
        <p>€ 9.500 - € 10.500</p>
        <a href=".">{{ __('details.buy-now',['price' => '€ 15.000']) }}</a>
        <p class="bids">{{ trans_choice('details.bid-count-reversed',7) }}7</p>
        <form action="." method="post">
            {{ csrf_field() }}
            <input type="number" value="8.750,02">
            <button>{{ __('details.bid') }} <img src='{{ asset('/img/icons/arrow.svg') }}' alt='{{ __('general.arrow-alt') }}'></button>
        </form>
        <a href=".">
            <img src="{{ asset('/img/icons/menu.svg') }}" alt="{{ __('general.menu-alt') }}">
        </a>
    </div>
    <article>
        <h3>{{ __('details.description') }}</h3>
        <p>{{ __('details.description-content') }}</p>
        <h3>{{ __('details.condition') }}</h3>
        <p>{{ __('details.condition-content') }}</p>
        <aside>
            <h3>{{ __('details.artist') }}</h3>
            <p>{{ __('general.bread-salvador') }}</p>
            <p>{{ __('details.artist-lang') }}</p>
            <p>1904 - 1989</p>
            <h3>{{ __('details.dimensions') }}</h3>
            <p>10.43 x 10.43 x 10.44 cm</p>
            <h3>{{ __('details.color') }}</h3>
            <p>{{ __('details.color-content') }}</p>
            <button>{{ __('details.ask-question') }}</button>
        </aside>
    </article>
    <section class="related">
        <h2>{{ __('details.related-title') }}</h2>
        <nav>
            <ul>
                <li>
                    <a href=".">
                        <figure>
                            <img src="{{ asset('/img/details/rel 1.jpg') }}" alt="{{ __('home.right-alt') }}">
                            <figcaption>
                                <p>1979, {{ __('general.bread-salvador') }}</p>
                                <strong>{{ __('details.article-title') }}</strong>
                                <p>€ 8.900</p>
                            </figcaption>
                            <div class="action">
                                <time>25d 14u 44m</time>
                                <button>{{ __('general.call-to-auction') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
                            </div>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href=".">
                        <figure>
                            <img src="{{ asset('/img/details/rel 2.jpg') }}" alt="{{ __('details.related-2') }}">
                            <figcaption>
                                <p>1979, {{ __('general.bread-salvador') }}</p>
                                <strong>{{ __('details.article-title') }}</strong>
                                <p>€ 8.900</p>
                            </figcaption>
                            <div class="action">
                                <time>25d 14u 44m</time>
                                <button>{{ __('general.call-to-auction') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
                            </div>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href=".">
                        <figure>
                            <img src="{{ asset('/img/details/rel 3.jpg') }}" alt="{{ __('details.related-3') }}">
                            <figcaption>
                                <p>1979, {{ __('general.bread-salvador') }}</p>
                                <strong>{{ __('details.article-title') }}</strong>
                                <p>€ 8.900</p>
                            </figcaption>
                            <div class="action">
                                <time>25d 14u 44m</time>
                                <button>{{ __('general.call-to-auction') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
                            </div>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href=".">
                        <figure>
                            <img src="{{ asset('/img/details/rel 4.jpg') }}" alt="{{ __('details.related-4') }}">
                            <figcaption>
                                <p>1979, {{ __('general.bread-salvador') }}</p>
                                <strong>{{ __('details.article-title') }}</strong>
                                <p>€ 8.900</p>
                            </figcaption>
                            <div class="action">
                                <time>25d 14u 44m</time>
                                <button>{{ __('general.call-to-auction') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
                            </div>
                        </figure>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
@endsection