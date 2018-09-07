<html>
@include('layouts.head')

<body>
@include('layouts.navigation')
<div class="position-relative">
    @yield('content')
    @include('layouts.footer')
</div>
</body>


</html>