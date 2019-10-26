@extends('/layouts/layout')

@section('title', 'Users')

@section('content')
    <div class="title">Users List</div>
        <div class="box">
            <table class="table is-hoverable is-fullwidth">
                <thead >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <input type="checkbox" data-id="{{ $user->id }}" name="status" class="js-switch" {{ $user->status == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <form method="post" action="/user/{{ $user->id }}">
                                @method('DELETE')
                                @csrf
                                <div class="control">
                                    <button type="submit" class="button is-link">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

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
                    console.log(data.message);
                }
            });
        });
    });

</script>
@endsection