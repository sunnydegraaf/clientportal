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
    @if ($product->colors->count())
        <div class="control">
            <label class="label">Color</label>
                @foreach ($product->colors as $color)
                    <p>{{ $color->color }}</p>
                @endforeach
        </div>

        <div class="control">
            <label class="label">Image</label>
            @foreach ($product->images as $image)
                <img src="{{ $image->src }}" alt="{{ $image->alt }}">
            @endforeach
        </div>
    @endif
@endsection