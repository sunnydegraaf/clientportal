<nav class="navbar has-background-white" role="navigation">
    <div class="navbar-menu">
        <div class="navbar-start">
            @if (Route::has('login'))
            @auth
                <a class="navbar-item" href="{{ url('/home') }}">Home</a>
            @else
                <a class="navbar-item" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="navbar-item" href="{{ route('register') }}">Register</a>
                    @endif
            @endauth

            <a class="navbar-item" href="{{ url('/products') }}">Products</a>
            <a class="navbar-item" href="{{ url('/categories') }}">Categories</a>
        </div>
    </div>
</nav>
@endif