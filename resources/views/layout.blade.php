<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width">
	<title>@yield('title'){{ config('app.name', 'Landoretti ART') }}</title>
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#01a6a0">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
<header>
    <div class="logo">
        <h1>{{ __('general.brand-name') }}</h1>
        <img src="{{ asset('/img/logo-text-bottom.svg') }}" alt="{{ __('general.brand-name') }}">
    </div>
    <div class="top-bar">
        <ul class="user-bar">
            @guest
                <li><a href="{{ route('register') }}">{{ __('general.Register') }}</a></li>
                <li><a href=".">{{ __('general.Login') }}</a></li>
            @else
                <li><a href="{{ route('watchlist') }}">{{ __('general.WATCHLIST') }}</a></li>
                <li><a href="{{ route('profile') }}">{{ __('general.PROFILE') }}</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="{{ __('general.LOGOUT') }}">
                    </form>
                </li>
            @endguest
        </ul>
        <form class="search-field" action="{{ route('search') }}" method="post">
            <input placeholder="{{ __('general.Search') }}" name="search">
            <input type="image" src="{{ asset('/img/loop.svg') }}" alt="{{ __('general.Search') }}">
        </form>
    </div>
    <div class="nav-bar">
        <nav class="navigation">
            <ul>
                <li><a href="{{ route('home') }}">{{ __('general.HOME') }}</a></li>
                <li><a href="{{ route('art') }}">{{ __('general.ART') }}</a></li>
                <li><a href="{{ route('isearch') }}">{{ __('general.ISEARCH') }}</a></li>
                <li><a href="{{ route('myauctions') }}">{{ __('general.MYAUCTIONS') }}</a></li>
                <li><a href="{{ route('mybids') }}">{{ __('general.MYBIDS') }}</a></li>
                <li><a href="{{ route('contact') }}">{{ __('general.CONTACT') }}</a></li>
            </ul>
        </nav>
        <ul>
            <li><a href="{{ route('changeLang',['lang' => 'NL']) }}">NL</a></li>
            <li><a href="{{ route('changeLang',['lang' => 'FR']) }}">FR</a></li>
            <li><a href="{{ route('changeLang',['lang' => 'EN']) }}">EN</a></li>
        </ul>
    </div>
</header>
@yield('content')
<footer>
    <div class="sitemap">

    </div>
    <div class="contact">
        <form class="search-field" action="{{ route('search') }}" method="post">
            <label for="search">{{ __('general.SEARCH_TITLE') }}</label>
            <input placeholder="{{ __('general.Search') }}" name="search" id="search">
            <input type="image" src="{{ asset('/img/loop.svg') }}" alt="{{ __('general.Search') }}">
        </form>
        <section>
            <h3>{{ __('general.CONTACT') }}</h3>
            <p>{{ __('general.brand-name') }}</p>
            <p>{{ __('general.street') }}</p>
            <p>{{ __('general.city') }}</p>
            <br>
            <p class="phone">{{ __('general.phone') }}</p>
            <a href="mailto:info@landorettiart.com" class="mail">info@landorettiart.com</a>
        </section>
        <div class="share">
            <ul>
                <li><a href="{{ url('http://facebook.com') }}"><img src="{{ asset('img/facebook.svg') }}" alt="Facebook"></a></li>
                <li><a href="{{ url('http://twitter.com') }}"><img src="{{ asset('img/twitter.svg') }}" alt="Twitter"></a></li>
                <li><a href="{{ url('http://youtube.com') }}"><img src="{{ asset('img/youtube.svg') }}" alt="YouTube"></a></li>
                <li><a href="{{ url('http://google+.com') }}"><img src="{{ asset('img/google-plus.svg') }}" alt="Google+"></a></li>
            </ul>
        </div>
        <p class="copywrite">{{ __('general.copywrite',['year'=>date('Y')]) }}</p>
    </div>
    <div class="bottom-bar">
        <div class="logo">
            <h1>{{ __('general.brand-name') }}</h1>
            <img src="{{ asset('/img/logo-text-top.svg') }}" alt="{{ __('general.brand-name') }}">
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="{{ route('home') }}">{{ __('general.HOME') }}</a></li>
                <li><a href="{{ route('art') }}">{{ __('general.ART') }}</a></li>
                <li><a href="{{ route('isearch') }}">{{ __('general.ISEARCH') }}</a></li>
                <li><a href="{{ route('myauctions') }}">{{ __('general.MYAUCTIONS') }}</a></li>
                <li><a href="{{ route('mybids') }}">{{ __('general.MYBIDS') }}</a></li>
                <li><a href="{{ route('contact') }}">{{ __('general.CONTACT') }}</a></li>
            </ul>
        </nav>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>