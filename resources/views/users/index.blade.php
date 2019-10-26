@extends('/layouts/admin')

@section('title', 'Products')

@section('content')
    <h1 class="title">Users</h1>

    @foreach ($users as $user)
        <div class="box">
            <a href="/users/{{ $user->id }}">
                {{--
                                <img src="{{ $product->image->src }}" alt="{{ $product->image->alt }}">
                --}}
                <h2 class="title is-4">{{ $user->title }}</h2>
            </a>
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
            <td><input type="checkbox" data-id="{{ $user->id }}" name="status" class="js-switch" {{ $user->status == 1 ? 'checked' : '' }}></td>
        @if (Route::has('login'))
                <div class="level">
                    <form method="post" action="/users/{{ $user->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="control">
                            <button type="submit" class="button">Delete</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    @endforeach

    <script>
        let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });
        $(document).ready(function(){
            $('.js-switch').change(function () {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('users.update.status') }}',
                    data: {'status': status, 'user_id': userId},
                    success: function (data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                    }
                });
            });
        });
    </script>

@endsection