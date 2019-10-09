@extends('/layouts/layout')

@section('title', 'Categories')

@section('content')
    <h1 class="title">Categories</h1>

    @foreach ($categories as $category)
        <div class="box">
            <h2 class="title is-4">{{ $category->name }}</h2>
            <p>{{ $category->description }}</p>

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

        </div>
    @endforeach
@endsection