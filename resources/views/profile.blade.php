@extends('/layouts/layout')

@section('title', 'Profile')

@section('content')
    <h1 class="title">{{ $user->name }}'s profile</h1>
        <div class="box">
            <div class="media">
                <div class="media-left">
                    <img class="image is-64x64" style="border-radius: 50%" src="/images/avatars/{{ $user->avatar }}">
                    <form enctype="multipart/form-data" action="/profile" method="post">
                        @csrf
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="submit">
                    </form>
                </div>
                <div class="media-content">
                    <div class="">
                        <p>Name: {{ $user->name }}</p>
                        <p>Email: {{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
@endsection