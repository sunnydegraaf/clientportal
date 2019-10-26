<nav class="navbar has-background-white" role="navigation">
    <div class="navbar-brand" style="background-color: #3273dc">
        <a class="navbar-item" href="/">
            <img style="size: 50px 50px" src="/images/sweat.png">
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start">
            @if (Auth::user())
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ url('/products') }}">Products</a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ url('/products/bikes') }}">Category #1</a>
                    <a class="navbar-item" href="{{ url('/products/boats') }}">Category #2</a>
                    @if(Auth::user()->hasAnyRole('storemanager'))
                    <a class="navbar-item" href="{{ url('/products/create') }}">Create</a>
                    @endif
                </div>
            </div>


            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ url('/categories') }}">Categories</a>
                @if(Auth::user()->hasAnyRole('storemanager'))
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ url('/categories/create') }}">Create</a>
                @endif
                </div>
            </div>

            @auth('admin')
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="{{ url('/users') }}">Users</a>
            </div>
            @endauth
        </div>
        @endif
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