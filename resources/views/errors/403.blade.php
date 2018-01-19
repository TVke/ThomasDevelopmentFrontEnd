@extends('layout')
@section('content')
    <section class="error">
        <h2>{{ __('error.title-403') }}</h2>
        <p>{{ __('error.explanation-403') }}</p>
    </section>
@endsection