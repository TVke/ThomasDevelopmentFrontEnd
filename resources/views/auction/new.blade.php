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
            <li><a href=".">{{ __('general.bread-user') }}</a></li>
            <li><a href=".">{{ __('general.bread-myauctions') }}</a></li>
            <li><a href=".">{{ __('general.bread-new-auction') }}</a></li>
        </ul>
    </nav>
    <form action="." method="post" enctype="multipart/form-data">
        <h2>{{ __('auction-new.title') }}</h2>
        {{ csrf_field() }}
        <input type="hidden" name="style">
        <div class="select">
            <button><p>{{ __('auction-new.style') }}</p> <img src="{{ asset('/img/icons/select_arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
            <div class="options">
                <ul>
                    <li><a href=".">{{ __('general.s1_Abstract') }}</a></li>
                    <li><a href=".">{{ __('general.s1_African') }}</a></li>
                    <li><a href=".">{{ __('general.s1_Asian') }}</a></li>
                    <li><a href=".">{{ __('general.s1_Conceptual') }}</a></li>
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
            </div>
        </div>
        <div>
            <div>
                <label for="title">{{ __('auction-new.label-auction') }}</label>
                <input id="title" placeholder="{{ __('auction-new.label-auction') }}" required>
            </div>
            <div>
                <label for="year">{{ __('auction-new.label-year') }}</label>
                <input type="number" id="year" placeholder="XXXX" min="0" required>
            </div>
        </div>
        <div>
            <div>
                <label for="width">{{ __('auction-new.label-width') }}</label>
                <input type="number" id="width" placeholder="XXXX" min="0" required>
            </div>
            <div>
                <label for="height">{{ __('auction-new.label-height') }}</label>
                <input type="number" id="height" placeholder="XXXX" min="0" required>
            </div>
            <div>
                <label for="depth">{{ __('auction-new.label-depth') }} <span>({{ __('auction-new.optional') }})</span></label>
                <input type="number" id="depth" placeholder="XXXX" min="0" required>
            </div>
        </div>
        <div>
            <div>
                <label for="description">{{ __('auction-new.label-description') }}</label>
                <textarea id="description" placeholder="{{ __('auction-new.label-description-placeholder') }}" required></textarea>

            </div>
        </div>
        <div>
            <div>
                <label for="condition">{{ __('auction-new.label-condition') }}</label>
                <textarea id="condition" placeholder="{{ __('auction-new.label-condition-placeholder') }}" required></textarea>
            </div>
        </div>
        <div>
            <div>
                <label for="origin">{{ __('auction-new.label-origin') }}</label>
                <input id="origin" placeholder="{{ __('auction-new.label-origin-placeholder') }}" required>
            </div>
        </div>
        <div>
            <div>
                <label>{{ __('auction-new.label-photos') }}</label>
                <p>{{ __('auction-new.label-photos-content') }}</p>
            </div>
        </div>
        <div>
            <div>
                <label for="artwork" class="grey-buttons">{{ __('auction-new.upload-artwork') }}</label>
                <input type="file" id="artwork" multiple required>
            </div>
            <div>
                <label for="signature" class="grey-buttons">{{ __('auction-new.upload-signature') }}</label>
                <input type="file" id="signature" multiple required>
            </div>
            <div>
                <label for="optional" class="grey-buttons">{{ __('auction-new.upload-optional') }}</label>
                <input type="file" id="optional" multiple>
            </div>
        </div>
        <section>
            <h3>{{ __('auction-new.pricing') }}</h3>
            <div>
                <div>
                    <label for="min-est">{{ __('auction-new.label-min-est') }}</label>
                    <input type="number" id="min-est" placeholder="XXXX" min="0" required>
                </div>
                <div>
                    <label for="max-est">{{ __('auction-new.label-max-est') }}</label>
                    <input type="number" id="max-est" placeholder="XXXX" min="0" required>
                </div>
                <div>
                    <label for="buyout">{{ __('auction-new.label-buyout') }} <span>({{ __('auction-new.optional') }})</span></label>
                    <input type="number" id="buyout" placeholder="XXXX" min="0" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="end">{{ __('auction-new.label-end') }}</label>
                    <input type="date" id="end" placeholder="DD / MM / YY" required>
                </div>
                <div>
                    <label>{{ __('auction-new.label-attention') }}</label>
                    <p>{{ __('auction-new.label-attention-content') }}</p>
                </div>
            </div>
        </section>
        <div class="actions">
            <label for="terms"><input type="checkbox" id="terms" required>{{ __('auction-new.label-agree') }} <a href=".">{{ __('auction-new.label-terms') }}</a></label>
            <input type="submit" value="{{ __('auction-new.submit') }}">
            <button>{{ __('auction-new.ask') }} <img src="{{ asset('/img/icons/arrow.svg') }}" alt="{{ __('general.arrow-alt') }}"></button>
        </div>
    </form>
@endsection