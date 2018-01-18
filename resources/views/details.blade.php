@extends('layout')
@section('content')
    <figure class="spotlight">
        <img src="{{ asset('img/hero 1.jpg') }}" alt="{{ __('general.image-alt') }}">
        <figcaption>
            <div class="content">
                <h4>{{ __('general.item') }}</h4>
                <p>{{ __('general.details') }}</p>
                <p>{{ __('general.price',['price'=>'299,99']) }}</p>
                <button>{{ __('general.call-to-auction') }}<img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
            </div>
        </figcaption>
    </figure>
@endsection