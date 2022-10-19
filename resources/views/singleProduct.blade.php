@extends('layouts.app')

@section('content')
    <div class="contianer w-75 mx-auto mt-5 ">
        <div class="row">
            <div class="col-4">
                <img src="/images/{{ $product->image }}" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <div class="row">
                    <h2>{{ $product->product_name }}</h2>
                </div>
                <div class="row">
                    <h5>description:</h5>
                    <p>
                        {{ $product->description }}
                    </p>
                    <p class="card-text"><b>${{ $product->price }}</b></p>
                </div>
            </div>
        </div>
    </div>

@endsection
