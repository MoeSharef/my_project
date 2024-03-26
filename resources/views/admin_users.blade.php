@extends('main_layout')
@section('title')
    Users
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/table.css') }}">
    @livewireStyles
@endsection

@section('contant')
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">logout</button>
    </form>
    <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Open Popup Form
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('adduser')
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('edituser')
                </div>
            </div>
        </div>
    </div>
    <table id="users" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Total Bid</th>
            </tr>
        </thead>
        <tbody>
            @livewire('table')
        </tbody>
        <tfoot>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Total Bid</th>
            </tr>
        </tfoot>
    </table>
    @livewireScripts
@endsection

@section('script')
    <script src="{{ asset('/js/access_log_table.js') }}"></script>
@endsection
