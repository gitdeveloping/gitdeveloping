<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')

<body>
    <div id="app" class="position-relative">
        @include('layouts.app.navigation')
        @yield('content')
        @include('layouts.footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
