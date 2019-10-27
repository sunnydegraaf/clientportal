@extends('/layouts/layout')

@section('title', 'Categories')

@section('content')
    <h1 class="title">Boats</h1>

    @foreach ($boats as $boat)
        <div class="box">
            Yo
        </div>
    @endforeach
@endsection