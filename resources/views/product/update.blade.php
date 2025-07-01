@extends('layout');
@section('content')

<div class="bg-white p-8 w-full max-w border border-gray-300">
    <h1 class="text-2xl">
        Edit Product
    </h1>
    <form action="{{ route('product.put', $product->id) }}" method="post" class="space-y-6">
        @csrf
        <div class="relative">
            <label>Name</label>
            <input required type="text" value="{{ $product->name }}" class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="name">
        </div>
    
        <div class="relative">
            <label>Description</label>
            <textarea required type="text" rows="3" class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="description">{{ $product->description }}</textarea>
        </div>
    
        <div class="relative">
            <label>Price</label>
            <input required type="number" value="{{ $product->price }}" step="0.01" class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="price">
        </div>
    
        <div class="relative">
            <label>Stock</label>
            <input required type="number" value="{{ $product->stock }}" class="peer w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition" name="stock">
        </div>
    
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
    </form>
</div>


@endsection