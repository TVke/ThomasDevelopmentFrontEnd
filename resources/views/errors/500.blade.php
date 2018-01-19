@extends('layout')
@section('content')
    <section class="error">
        <h2>{{ __('error.title-500') }}</h2>
        <p>{{ __('error.explanation-500') }}</p>
    </section>
@endsection