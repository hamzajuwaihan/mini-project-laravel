@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="card text-bg-info m-3 col-6" style="max-width: 18rem;">
                <h1 class="card-header">Users</h1>
                <div class="card-body">
                    <h5 class="card-title">Number Of Users</h5>
                    <div class="row">
                        <h6 class="card-text col-6">{{ $allUsers }}</h6>
                        <a href="users" class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Show Users
                            </h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card text-bg-success m-3 col-6" style="max-width: 18rem;">
                <h1 class="card-header">Products</h1>
                <div class="card-body">
                    <h5 class="card-title">Number Of Products</h5>
                    <div class="row">
                        <h6 class="card-text col-6">{{ $allProducts }} </h6>
                        <a href="products" class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Show Products
                            </h6>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
