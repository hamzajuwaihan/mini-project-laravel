@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Edit user</h1>

    @if (Auth::check())
        <div class="container mt-5 px-0">
            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group mb-3 px-0">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group mb-3 px-0">
                    <label for="role" class="form-label">Role:</label>
                    <select name="role" id="role" class="form-select">
                        <option value="admin">Admin</option>
                        <option value="user" selected>User</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-secondary mx-0 px-0 w-100">Submit</button>
                </div>
            </form>
        </div>
    @endif
@endsection
