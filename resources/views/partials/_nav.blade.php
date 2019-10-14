<nav class="navbar has-background-white" role="navigation">
    <div class="navbar-menu">
        <div class="navbar-start">


            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ url('/products') }}">Products</a>
                @if (Route::has('login'))
                    @auth
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ url('/products/create') }}">Create</a>
                    </div>
                    @endauth
                @endif
            </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="{{ url('/categories') }}">Categories</a>
                    @if (Route::has('login'))
                        @auth
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ url('/categories/create') }}">Create</a>
                        </div>
                        @endauth
                    @endif
                </div>

        </div>


    </div>
            @if (Route::has('login'))
            @auth
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ url('/user') }}">Profile</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/user/{{ Auth::user()->id }}/edit">Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @else
                <a class="navbar-item" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="navbar-item" href="{{ route('register') }}">Register</a>
                    @endif
            @endauth
            @endif
</nav>