@extends('/layouts/layout')

@section('content')

<h1 class="title">Hello {{ $user->first()->name }}</h1>

@endsection
