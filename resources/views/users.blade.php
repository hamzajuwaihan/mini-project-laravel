@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">All users</h1>
    @if (session()->has('message'))
        <div class="alert alert-warning" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (Auth::check())
        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>User Type</th>
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
                        <td><a href="{{ route('users.edit', $row->id) }}"><i class="bi bi-pencil-fill text-primary"></i></a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn p-0" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $row->id }}">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{ $row->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm Message</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure ? {{ $row->id }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('users.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
