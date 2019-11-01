@extends('/layouts/layout')

@section('title', 'Categories')

@section('content')
    <h1 class="title">Categories</h1>

    @foreach ($categories as $category)
        <div class="box">
            <a href="/categories/{{ $category->id }}">
                <h2 class="title is-4">{{ $category->name }}</h2>
            </a>
            <p>{{ $category->description }}</p>

            @if (Route::has('login') && Auth::user()->hasAnyRole('storemanager'))
            <div class="level">
                <form action="/categories/{{ $category->id }}/edit">
                    <div class="control">
                        <button type="submit" class="button is-link">Edit</button>
                    </div>
                </form>

                <form method="post" action="/categories/{{ $category->id }}">
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