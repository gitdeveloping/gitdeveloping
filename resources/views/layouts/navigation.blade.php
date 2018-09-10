<nav class="navbar navbar-dark">
    <!-- Navbar content -->
    <div class="container p-2">
        <a href="/">
            <img src="/images/logo-long-dark.png" alt="GitDeveloping Logo" height="50"/>
        </a>

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            @if (!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Sign Up</a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{route('home')}}"><button class="btn dark" >Go To App</button></a>
                </li>
            @endif
        </ul>
    </div>
</nav>