@extends('layouts.app')

@section('content')
    <h1 class="text-center">products</h1>
    <div class="fluid-container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $item)
                <div class="col">
                    <div class="card h-100">
                        <a href="{{ route('products.show' , $item->id) }}">
                            <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->product_name }}</h5>
                            <p class="card-text text-center"><b>${{ $item->price }}</b></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
