@extends('/layouts/layout')

@section('content')
    <h1 class="title">Products</h1>

    @foreach ($products as $product)
        <div class="box">
            <a href="/products/{{ $product->id }}">
                @foreach ($product->images as $image)
                    <img src="{{ $image->src }}" alt="{{ $image->alt }}">
                @endforeach
            <h2 class="title is-4">{{ $product->title }}</h2>
            </a>
            <p>{{ $product->description }}</p>
            <p>&euro;{{ $product->price }},-</p>

            <div class="level">
            <form action="/products/{{$product->id}}/edit">
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

        </div>
    @endforeach
@endsection