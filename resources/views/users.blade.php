@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">All users</h1>
    @if (Auth::check())
        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>User Type</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($users as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->role }}</td>
                        <td><a href=""><i class="bi bi-eye-fill text-primary"></i></a></td>
                        <td><i class="bi bi-pencil-fill text-info"></i></td>
                        <td><i class="bi bi-trash3-fill text-danger"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
