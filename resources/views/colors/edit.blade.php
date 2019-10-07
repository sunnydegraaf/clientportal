@extends('/layouts/layout')

@section('content')
    <h1 class="title">Edit color</h1>

    <form method="post" action="/colors/{{ $color->id }}">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title" class="label">Name</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $color->name }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
        </div>
    </form>
@endsection