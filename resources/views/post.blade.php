@extends('layout.layout')
@section('title')
    Post
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
    $name = '';
    $num = 1;
@endphp
@section('section')
    @if ($num > 0 && $num < 3)
        <p>greater</p>
    @elseif($num >= 3)
        <p>greater than</p>
    @else
        <p>less</p>
    @endif


 @isset($num)
     <p>Variable is defined</p>
 @endisset

@empty($name)
    <p>This is empty</p>
@endempty



    
@endsection
