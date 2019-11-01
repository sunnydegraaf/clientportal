@extends('/layouts/layout')

@section('title', 'Categories')

@section('content')
    <h1 class="title">Categories</h1>

    @foreach ($products as $product)
        <div class="box">
            <h2 class="title is-4">{{ $product->title }}</h2>
            <p>{{ $product->description }}</p>

            @if (Route::has('login') && Auth::user()->hasAnyRole('storemanager'))
                <div class="level">
                    <form action="/products/{{ $product->id }}/edit">
                        <div class="control">
                            <button type="submit" class="button is-link">Edit</button>
                        </div>
                    </form>

                    <form method="post" action="/products/{{ $product->id }}">
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