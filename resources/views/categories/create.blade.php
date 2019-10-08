@extends('/layouts/layout')

@section('content')
    <h1 class="title">Create category</h1>

    <form method="post" action="/categories" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label for="title" class="label">Category</label>

            <div class="control">
                <input type="text" class="input" name="name" placeholder="Name" value="{{ old('name') }}">
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