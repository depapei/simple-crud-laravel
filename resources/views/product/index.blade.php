@extends('layout');
@section('content')

<div class="flex gap-4 mb-3">
    <h2 class="text-2xl text-gray-600">Product List</h2>
    <a href="{{ route('product.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Product</a>
</div>
<hr>

<div class="mt-3">
    <table class="min-w-full table-auto text-sm text-left text-gray-700 bg-white">
        <thead class="bg-blue-600 text-white text-sm">
            <tr>
                <th class="px-6 py-3">No.</th>
                <th class="px-6 py-3">Name</th>
                <th class="px-6 py-3">Description</th>
                <th class="px-6 py-3">Price</th>
                <th class="px-6 py-3">Stock</th>
                <th class="px-6 py-3">Created at</th>
                <th class="px-6 py-3">Updated at</th>
                <th class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $data as $no=>$product )
            <tr class="hover:bg-blue-50 transition">
                <td class="px-6 py-3 font-medium">{{ $no+1 }}</td>
                <td class="px-6 py-4">{{ $product->name }}</td>
                <td class="px-6 py-4">{{ $product->description }}</td>
                <td class="px-6 py-4">{{ $product->price }}</td>
                <td class="px-6 py-4">{{ $product->stock }}</td>
                <td class="px-6 py-4">{{ $product->created_at }}</td>
                <td class="px-6 py-4">{{ $product->updated_at }}</td>
                <td class="px-6 py-4">
                    <div class=" d-flex space-y-3">
                        <a href="{{ route('product.update', $product->id) }}" class="border border-blue-400 hover:border-blue-600 hover:text-blue-600 text-blue-400 font-bold py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('product.delete', $product->id) }}" method="post" onsubmit="return confirm('Are you sure want to delete this product?')">
                            @csrf
                            <button class="border border-red-400 hover:border-red-600 hover:text-red-600 text-red-400 font-bold py-1 px-2 rounded">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection