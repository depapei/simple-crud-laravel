@extends('layout');
@section('content')

<div class="bg-white p-8 w-full max-w border border-gray-300">
    <h1 class="text-2xl">
        Add Product
    </h1>
    <form action="{{ route('product.post') }}" method="post" class="space-y-6">
        @csrf
        <div class="relative">
            <label>Name</label>
            <input type="text" required class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="name" placeholder="Input Product Name">
        </div>
    
        <div class="relative">
            <label>Description</label>
            <textarea type="text" required row="3" class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="description" placeholder="Input Product Description"></textarea>
        </div>
    
        <div class="relative">
            <label>Price</label>
            <input type="number" required step="0.01" class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="price" placeholder="Input Product Price">
        </div>
    
        <div class="relative">
            <label>Stock</label>
            <input type="number" required class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="stock" placeholder="Input Product Stock">
        </div>
    
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
    </form>
</div>


@endsection