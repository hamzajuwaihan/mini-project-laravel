@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center justify-content-center">
            <h1 class="text-center mt-5 md-5">All Products</h1>
            <a href="{{ route('productsAdmin.create') }}" class="btn btn-primary col-2 mt-2">
                <i class="bi bi-plus text-white fs-1"></i>
            </a>
        </div>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-warning" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (Auth::check())
        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>product name</th>
                <th>image</th>
                <th>price</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($products as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->product_name }}</td>
                        <td><img src="./images/{{ $row->image }}" alt="" style="width:100px;height:100px;"></td>
                        <td>{{ $row->price }}</td>
                        <td><a href="{{ route('productsAdmin.edit', $row->id) }}"><i class="bi bi-pencil-fill text-primary"></i></a>
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
                                            <form action="{{ route('productsAdmin.destroy', $row->id) }}" method="POST">
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
