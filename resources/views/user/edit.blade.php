@extends('/layouts/layout')

@section('title', 'Edit profile')

@section('content')
    <h1 class="title">{{ $user->name }}'s profile</h1>
    <div class="box">
        <div class="media">
            <div class="media-left">
                <img class="image is-64x64" style="border-radius: 50%" src="/images/avatars/{{ $user->avatar }}">

                <form enctype="multipart/form-data" action="/user/{{ $user->id }}" method="post">
                    @method('PATCH')
                    @csrf

                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">

                    <div class="field">
                        <label for="title" class="label">Name</label>

                        <div class="control">
                            <input type="text" class="input" name="name" placeholder="Name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="field">
                        <label for="title" class="label">Email</label>

                        <div class="control">
                            <input type="text" class="input" name="email" placeholder="email" value="{{ $user->email }}">
                        </div>
                    </div>

                    <input type="submit">

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


