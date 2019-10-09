<nav>
    @if (Route::has('login'))
        <nav class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth

            <a href="{{ url('/products') }}">Products</a>
            <a href="{{ url('/categories') }}">Categories</a>
        </nav>
@endif