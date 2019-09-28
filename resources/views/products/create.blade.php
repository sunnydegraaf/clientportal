@extends('/layouts/layout')

@section('content')
    <h1 class="title">Edit project</h1>

    <form method="post" action="/products" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label for="price" class="label">Price</label>

            <div class="control">
                <input type="number" class="input" name="price" placeholder="Price" value="{{ old('price') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea" placeholder="Description" >{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection