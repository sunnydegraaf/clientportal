<nav class="navbar has-background-white" role="navigation">
    <div class="navbar-menu">
        <div class="navbar-start">

            @if (Route::has('login'))
            @auth
                <a class="navbar-item" href="{{ url('/') }}">Home</a>
            @else
                <a class="navbar-item" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="navbar-item" href="{{ route('register') }}">Register</a>
                    @endif
            @endauth

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ url('/products') }}">Products</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ url('/products/create') }}">Create</a>
                </div>
            </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="{{ url('/categories') }}">Categories</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ url('/categories/create') }}">Create</a>
                    </div>
                </div>

        </div>

        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href="{{ url('/profile') }}">Profile</a>

            <div class="navbar-dropdown">
                <a class="navbar-item" href="{{ url('/profile') }}">Settings</a>
                <a class="navbar-item" href="">Logout</a>
            </div>
        </div>
    </div>
</nav>
@endif