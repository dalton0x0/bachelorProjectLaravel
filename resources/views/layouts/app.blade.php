<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/theme.css') }}">
    @stack('stylesheet')
</head>
<body class="g-sidenav-show">
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
