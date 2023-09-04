@extends('layout.layout')
@section('title')
    Product
@endsection

    @php
        $products = [
            [
                'title' => 'Product 1',
                'price' => 999,
                'img' => 'product-img-1.jpg',
            ],
            [
                'title' => 'Product 2',
                'price' => 999,
                'img' => 'product-img-2.jpg',
            ],
            [
                'title' => 'Product 3',
                'price' => 999,
                'img' => 'product-img-3.jpg',
            ],
        ];
        
    @endphp


@section('section')
    

    <div class="container my-3">
        <h1 class="text-center">Product Page</h1>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-md-4">

                    <div class="card" style="width: 18rem;">
                        <img src="products/{{ $item['img'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p>${{ $item['price'] }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        




        </div>
    </div>

@endsection
