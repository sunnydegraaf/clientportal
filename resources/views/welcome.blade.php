@extends('/layouts/layout')

@section('content')

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
        </nav>
@endif

<h1 class="title">Hello {{ $user->first()->name }}</h1>


@endsection
