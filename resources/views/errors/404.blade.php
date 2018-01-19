@extends('layout')
@section('content')
    <section class="error">
        <h2>{{ __('error.title-404') }}</h2>
        <p>{{ __('error.explanation-404') }}</p>
    </section>
@endsection