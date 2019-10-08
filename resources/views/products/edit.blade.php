@extends('/layouts/layout')

@section('content')
    <h1 class="title">Edit project</h1>

    <form method="post" action="/products/{{ $product->id }}">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $product->title }}">
            </div>
        </div>

        <div class="field">
            <label for="price" class="label">Price</label>

            <div class="control">
                <input type="number" class="input" name="price" placeholder="Price" value="{{ $product->price }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Category</label>
            <div class="form-control">
                <select name="category_id" class="text">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
        </div>
    </form>
@endsection