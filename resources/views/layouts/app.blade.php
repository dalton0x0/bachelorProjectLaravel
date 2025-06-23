<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <div id="wrapper">
        @include('partials.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('partials.navbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('partials.footer')
        </div>
    </div>
    @include('partials.page-up')
    @include('partials.logout-modal')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/custom.js') }}"></script>
    @stack('scripts')
</body>
</html>
