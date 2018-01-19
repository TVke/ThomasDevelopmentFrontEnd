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
    <section>
        <p><strong>{{ __('filter.sort') }}</strong> <a href=".">{{ __('filter.sort-soon') }}</a>|<a href=".">{{ __('filter.sort-latest') }}</a>|<a href=".">{{ __('filter.sort-new') }}</a>|<a href=".">{{ __('filter.sort-popular') }}</a></p>
        <h2>{{ __('filter.advanced') }} <img src="{{ __('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></h2>

        <section>
            <ul>
                <li><h4>{{ __('general.PRICE') }}</h4></li>
                <li><a href=".">{{ __('general.p_UpTo') }} 5,000</a></li>
                <li><a href=".">5,000–10,000</a></li>
                <li><a href=".">10,000–25,000</a></li>
                <li><a href=".">25,000–50,000</a></li>
                <li><a href=".">50,000–100,000</a></li>
                <li><a href=".">{{ __('general.p_Above') }}</a></li>
            </ul>
            <ul>
                <li><h4>{{ __('general.ENDINGS') }}</h4></li>
                <li><a href=".">{{ __('general.en_Ending') }}</a></li>
                <li><a href=".">{{ __('general.en_Newly') }}</a></li>
                <li><a href=".">{{ __('general.en_Purchase') }}</a></li>
            </ul>
        </section>
        <section>
            <ul>
                <li><h4>{{ __('general.ERA') }}</h4></li>
                <li><a href=".">{{ __('general.er_Pre') }}</a></li>
                <li><a href=".">1940s–1950s</a></li>
                <li><a href=".">1960s–1980s</a></li>
                <li><a href=".">1990s–{{ __('general.er_Present') }}</a></li>
            </ul>
            <ul>
                <li><h4>{{ __('general.MEDIA') }}</h4></li>
                <li><a href=".">{{ __('general.s2_Design') }}</a></li>
                <li><a href=".">{{ __('general.s2_Paintings') }}</a></li>
                <li><a href=".">{{ __('general.s2_Photographs') }}</a></li>
                <li><a href=".">{{ __('general.s2_Prints') }}</a></li>
                <li><a href=".">{{ __('general.s2_Sculpture') }}</a></li>
            </ul>
        </section>
        <section>
            <ul>
                <li><h4>{{ __('general.STYLE') }}</h4></li>
                <li><a href=".">{{ __('general.s1_Abstract') }}</a></li>
                <li><a href=".">{{ __('general.s1_African') }}</a></li>
                <li><a href=".">{{ __('general.s1_Asian') }}</a></li>
                <li><a href="." class="selected">{{ __('general.s1_Conceptual') }}</a></li>
                <li><a href=".">{{ __('general.s1_Contemporary') }}</a></li>
                <li><a href=".">{{ __('general.s1_Emerging') }}</a></li>
                <li><a href=".">{{ __('general.s1_Figurative') }}</a></li>
                <li><a href=".">{{ __('general.s1_Middle') }}</a></li>
                <li><a href=".">{{ __('general.s1_Minimalism') }}</a></li>
                <li><a href=".">{{ __('general.s1_Modern') }}</a></li>
                <li><a href=".">{{ __('general.s1_Pop') }}</a></li>
                <li><a href=".">{{ __('general.s1_Urban') }}</a></li>
                <li><a href=".">{{ __('general.s1_Vintage') }}</a></li>
            </ul>
        </section>
    </section>
    <div class="location">
        <nav class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">{{ __('general.bread-home') }}</a></li>
                <li><a href="{{ route('FAQ') }}">{{ __('general.bread-auctions') }}</a></li>
            </ul>
        </nav>
        <nav class="pagination">
            <ul>
                <li><a href=".">&lt;</a></li>
                <li><a href=".">1</a></li>
                <li><a href=".">2</a></li>
                <li><a href="." class="active">3</a></li>
                <li><a href=".">4</a></li>
                <li><a href=".">&gt;</a></li>
            </ul>
        </nav>
    </div>
    <div class="results">
        <div>
            <a href=".">
                <figure>
                    <img src="{{ asset('/img/details/pop 1.jpg') }}" alt="{{ __('filter.pop-1') }}">
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
        </div>
        <div>
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
        </div>
    </div>

@endsection