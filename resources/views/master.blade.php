<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', config('app.description'))">
    <meta name="keywords" content="@yield('keywords', config('app.keywords'))">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('before-scripts')
</head>
<body>
<section>
    @yield('content')
</section>
<script src="{{ mix('js/app.js') }}"></script>
@stack('after-scripts')
</body>
</html>
