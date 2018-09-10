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
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>