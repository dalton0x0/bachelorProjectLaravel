<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('stylesheet')
</head>
<body class="bg-body-tertiary">
    <main class="container my-5">
        @yield('content')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
