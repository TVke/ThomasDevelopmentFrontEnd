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
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>