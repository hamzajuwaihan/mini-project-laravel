@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">Add Product</h1>

    @if (Auth::check())
        <div class="container mt-5 px-0">
            <form action="{{ route('productsAdmin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group mb-3">
                    <label for="product_name" class="form-label">Product Name:</label>
                    <input type="text" name="product_name" id="product_name" class="form-control"
                        >
                </div>
                <div class="form-group mb-3 px-0">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" name="price" id="price" class="form-control">
                </div>
                <div class="form-group mb-3 px-0">
                    <label for="description" class="form-label">description:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                   
                    </textarea>
                </div>
                <div class="form-group mb-3 px-0">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control"
                        >
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-secondary mx-0 px-0 w-100">Submit</button>
                </div>
            </form>
        </div>
    @endif
@endsection
