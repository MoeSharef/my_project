@extends('main_layout')
@section('title')
    Users
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/table.css') }}">
@endsection

@section('contant')
    <div class="">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">logout</button>
        </form>
        <table id="users" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $users)
                    <tr>
                        <td>{{ $users->id }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection

@section('script')
    <script src="{{ asset('/js/access_log_table.js') }}"></script>
@endsection
