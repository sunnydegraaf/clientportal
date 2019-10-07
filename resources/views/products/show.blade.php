@extends('/layouts/layout')

@section('content')
    <div class="field">
        <div class="control">
            <h1 class="title">{{ $product->title }}</h1>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <label class="label">Price</label>
            <p>{{ $product->price }}</p>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <label class="label">Description</label>
            <p>{{ $product->description }}</p>
        </div>
    </div>

    @if ($product->colors->count() || $product->images->count() || $product->categories->count())
        <div class="field">
            <div class="control">
                <label class="label">Color</label>
                @foreach ($product->colors as $color)
                    <p>{{ $color->name }}</p>
                @endforeach
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label class="label">Category</label>
                @foreach ($product->categories as $category)
                    <p>{{ $category->name }}</p>
                @endforeach
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label class="label">Image</label>
                @foreach ($product->images as $image)
                    <img src="{{ $image->src }}" alt="{{ $image->alt }}">
                @endforeach
            </div>
        </div>
    @endif
@endsection