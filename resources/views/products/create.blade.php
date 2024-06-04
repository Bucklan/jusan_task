@extends('layouts.app')
@section('title', 'Product Create')
@section('content')
    <section class="flex flex-row justify-center">
        <div class="shadow-md mt-48 p-6 rounded-md content-center">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="">
                    <h1 class="text-xl font-medium text-center m-5">Create Product</h1>
                    <label for="name" class="block font-medium text-sm text-gray-900 leading-7">Name</label>
                    <input type="text" name="name" id="name" class="rounded-md w-80 border-0 ring-1 ring-inset ring-gray-300 text-sm">
                </div>
                <div class="">
                    <label for="description" class="block font-medium text-sm text-gray-900 leading-7">Description</label>
                    <input type="text" name="description" id="description" class="rounded-md w-80 border-0 ring-1 ring-inset ring-gray-300 text-sm">
                </div>
                <div class="">
                    <label for="price" class="block text-sm font-medium text-gray-900 leading-6">Price</label>
                    <input type="number" class="rounded-md w-80 border-0 ring-1 ring-inset ring-gray-300 text-sm" name="price" id="price">
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-900 leading-6">Image</label>
                    <input type="file" name="image" id="image" class="block rounded-md w-80 py-2 border-0 ring-1 ring-inset ring-gray-300 text-sm">
                </div>
                <button class="bg-violet-700 text-white px-2 py-1 mt-3 text-md rounded-lg">Create</button>
            </form>
        </div>
    </section>
@endsection