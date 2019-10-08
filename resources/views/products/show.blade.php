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

    <div class="field">
        <div class="control">
            <label class="label">Category</label>
                <p>{{ $product->category->name }}</p>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <label class="label">Image</label>
{{--
                <img src="{{ $product->image->src }}" alt="{{ $product->image->alt }}">
--}}
        </div>
    </div>
@endsection