@extends('layouts.app')
@section('title', 'Product Create')
@section('content')
    <section>
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h1>Create Product</h1>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
            <br>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <br>
            <button>Create</button>
        </form>
    </section>
@endsection