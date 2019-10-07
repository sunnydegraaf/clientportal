@extends('/layouts/layout')

@section('content')
    <h1 class="title">Colors</h1>

    @foreach ($colors as $color)
        <div class="box">
            <a href="/colors/{{ $color->id }}">
                <h2 class="title is-4">{{ $color->name }}</h2>
            </a>
            <p>{{ $color->description }}</p>

            <div class="level">
                <form action="/colors/{{$color->id}}/edit">
                    <div class="control">
                        <button type="submit" class="button is-link">Edit</button>
                    </div>
                </form>

                <form method="post" action="/colors/{{ $color->id }}">
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