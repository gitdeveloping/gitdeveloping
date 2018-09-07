<html>
@include('layouts.head')

<body>
    <div class="position-relative">
        @include('layouts.navigation')
        @yield('content')
        @include('layouts.footer')
    </div>
</body>


</html>