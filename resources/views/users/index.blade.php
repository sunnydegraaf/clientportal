@extends('/layouts/layout')

@section('title', 'Products')

@section('content')
    <h1 class="title">Users</h1>

    @foreach ($users as $user)
        <div class="box">
            <a href="/users/{{ $user->id }}">
                {{--
                                <img src="{{ $product->image->src }}" alt="{{ $product->image->alt }}">
                --}}
                <h2 class="title is-4">{{ $user->title }}</h2>
            </a>
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>

            @if (Route::has('login'))
                <div class="level">
                    <form method="post" action="/users/{{ $user->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="control">
                            <button type="submit" class="button">Delete</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    @endforeach
@endsection