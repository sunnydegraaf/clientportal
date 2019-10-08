@extends('/layouts/layout')

@section('content')
    <h1 class="title">Categories</h1>
    <div class="row">
        <div class="is-half">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="is-half">
            <div class="well">
                <form method="post" action="/categories" enctype="multipart/form-data">
                    @csrf

                    <div class="field">
                        <label for="title" class="label">Name</label>

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
            </div>
        </div>
    </div>
@endsection