@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <h1 style="font-weight: 900;text-align: center">Products</h1>
    <br>
    <ul style="display: flex;
            flex-direction: column;
         align-items: center;
         justify-content: center;">
        @foreach($products as $product)
            <li>{{ $product->name }}</li>
            <li>{{ $product->description }}</li>
            <li>{{ $product->price }} KZT</li>
                        <img src="{{ $product->image }}"
                 alt="" width="150" height="150">
            <br>
        @endforeach
    </ul>
@endsection